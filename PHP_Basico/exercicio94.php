<?php

    interface ITemplate{
        public function getTemplate():string;
    }

    class RainTPLTemplate implements ITemplate
    {
        public function getTemplate():string
        {
            return "{data}";
        }
    }

    class BladeTemplate implements ITemplate
    {
        public function getTemplate():string
        {
            return "{{data}}";
        }
    }

    interface ShowTemplateFramworks{
        function showTemplate();
    }

    class RainTPLFactory implements ShowTemplateFramworks{
        public function showTemplate():ITemplate
        {
            return new RainTPLTemplate();
        }
    }

    class BladeFactory implements ShowTemplateFramworks{
        public function showTemplate():ITemplate
        {
            return new BladeTemplate();
        }
    }    
    
