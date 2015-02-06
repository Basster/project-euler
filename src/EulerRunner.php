<?php


namespace Basster;


use Symfony\Component\Stopwatch\Stopwatch;

class EulerRunner
{

    private $numProblems = 0;
    private $stopwatch;

    public function __construct($numProblems)
    {
        $this->numProblems = $numProblems;
        $this->stopwatch = new Stopwatch();
    }

    public function run()
    {
        $this->writeln('ProjectEuler Runner');

        for ($i = 1; $i <= $this->numProblems; $i++) {
            $className = 'Basster\\Euler' . $i;

            $this->write(sprintf('running %s', $className));

            /**
             * @var Euler $impl
             */
            $impl = new $className;
            $this->stopwatch->start($className);
            $impl->getSolution();
            $this->stopwatch->stop($className);

            $this->writeln(sprintf(' in %d ms', $this->stopwatch->getEvent($className)->getDuration()));
        }
    }

    private function writeln($text)
    {
        echo $text . PHP_EOL;
    }

    private function write($text)
    {
        echo $text;
    }
}