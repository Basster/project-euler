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
        $this->writeln();
        $this->writeln('| Problem       | time          |');
        $this->writeln('| ------------- | ------------- |');

        for ($i = 1; $i <= $this->numProblems; $i++) {
            $className = 'Basster\\Euler' . $i;

            /**
             * @var Euler $impl
             */
            $impl = new $className;
            $this->stopwatch->start($className);
            $impl->getSolution();
            $this->stopwatch->stop($className);

            $this->writeln(sprintf('| %s  | %d ms  |', $className, $this->stopwatch->getEvent($className)->getDuration()));
        }
    }

    private function writeln($text = '')
    {
        echo $text . PHP_EOL;
    }
}