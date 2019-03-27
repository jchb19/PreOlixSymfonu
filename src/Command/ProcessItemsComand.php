<?php
/**
 * Created by PhpStorm.
 * User: Lempere
 * Date: 3/20/2019
 * Time: 7:19 PM
 */

namespace App\Command;


use App\Entity\Inspeccion;
use App\Entity\InspeccionImageSquare;
use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Intervention\Image\ImageManager;

class ProcessItemsComand extends Command
{
    protected static $defaultName = 'preolix:process';

    private $logger;
    private $doctrine;

    public function __construct(LoggerInterface $logger, ContainerInterface $container
    )
    {
        $this->logger = $logger;
//        $this->doctrine = $doctrine->getEntityManager();// $container->get('doctrine')->getEntityManager();
        $this->doctrine = $container->get('doctrine')->getEntityManager();

        // you *must* call the parent constructor
        parent::__construct();
    }
    protected function configure()
    {
        $this->setDescription("show database items")
            ->setHelp("Show all the items from the preolix database")
            ->setDefinition(
                new InputDefinition([
                    new InputOption('inspeccion', 'i', InputOption::VALUE_REQUIRED),
                ])
            );
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $id = $input->getOption('inspeccion');
        if($id == null){
            $output->writeln(["need inspeccion id -> -i"]);
            return;
        }

        $inspeccions = $this->doctrine->getRepository(Inspeccion::class)->findById($id); //$this->doctrine->getRepository(Inspeccion::class)->findAll();
        $output->writeln([
            "Database Reader inspeccionId $id",
            '============',
            '',
        ]);
        $inspeccion = $inspeccions[0];
        echo "Inspeccion returned image path ".$inspeccion->getPicture1() ."  ...\n";
//        foreach ($inspeccions as $ins){
////            var_dump($ins);
//        }

        $squaresInspeccion = $this->doctrine->getRepository(InspeccionImageSquare::class)->findBy(['inspeccion'=>$id]);
        print "Square inspeccion";
        if(count($squaresInspeccion) == 0){
            print "No square found for inspeccion $id return";
            return;
        }

        // create an image manager instance with favored driver
        $manager = new ImageManager(array('driver' => 'imagick'));

        $urlPath = str_replace("../", '', $inspeccion->getPicture1());


        if( !is_dir("./$id")){
            mkdir("./$id");
        }
        foreach ($squaresInspeccion as $square){
//            var_dump($square);



            $idSquare = $square->getId();
            $image = $manager->make("../../host/preolics.com/$urlPath");

            $width = $image->width();
            $height = $image->height();
            $ratio = $height/$width;
            echo " square data ".intval($square->getWidth()/100) ." heigh:". intval($square->getHeight()/100) ;

            $sqWidht = $this->squareToPx($square->getWidth(),$width);
            $sqHeight = $this->squareToPx($square->getHeight(), $height);
            $sqRatio = $sqHeight/$sqWidht;
            $image
//                ->crop(intval($square->getWidth()/100) +10, intval($square->getHeight()/100) +10,
//                    intval($square->getX()/100) -10, intval($square->getY()/100) -10 )
                ->crop($sqWidht +10,  $sqHeight+10,
                    $this->squareToPx($square->getX(), $width) -10, $this->squareToPx($square->getY(), $height) -10 )
//                    ->crop(300, 300, 30, 40)
                ->rectangle(10, 10, $sqWidht, $sqHeight,function ($draw) {
//                    $draw->background('rgba(255, 255, 255, 0.5)');
                    $draw->border(1, '#000');
                })
                ->resize(800, intval(800* $sqRatio) )
            ;
            $image->save("./$id/$idSquare.jpg", 60);

        }




    }
    private function squareToPx($d, $total): int {
        return intval( ($d/10000)*$total );
    }

}
