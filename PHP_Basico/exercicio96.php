<?php

interface Aves{
    public function andar();
}
interface AvesQueVoam extends Aves{
    public function voar();
}
interface AvesQueNadam extends Aves{
    public function nadar();
}

class Pato implements AvesQueVoam, AvesQueNadam
{
    public function nadar(){}
    public function andar(){}
    public function voar(){}
}
class Pinguim implements AvesQueNadam
{
    public function nadar(){}
    public function andar(){}
}
class Andorinha implements AvesQueVoam
{
    public function voar(){}
    public function andar(){}
}