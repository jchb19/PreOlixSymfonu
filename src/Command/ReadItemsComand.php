<?php
/**
 * Created by PhpStorm.
 * User: Lempere
 * Date: 3/20/2019
 * Time: 7:19 PM
 */

namespace App\Command;


use App\Entity\Inspeccion;
use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ReadItemsComand extends Command
{
    protected static $defaultName = 'preolix:show';

    private $logger;
    private $doctrine;

    public function __construct(LoggerInterface $logger, ContainerInterface $container)
    {
        $this->logger = $logger;
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
        echo "Inspeccion returned image path ".$inspeccion.getPicture1();
//        foreach ($inspeccions as $ins){
//            var_dump($ins);
//        }
        //$inspeccions
    }

}
