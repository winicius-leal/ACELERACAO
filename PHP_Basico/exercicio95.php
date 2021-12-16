<?php
    interface IFormatOutputData{
        public function format(array $data):mixed;
    }

    class JsonFormat implements IFormatOutputData{
        public function format(array $data):mixed{
            return json_encode($data);
        }
    }


    class Report
    {
        public function getTitle()
        {
            return "Report Title";
        }

        public function getDate()
        {
            return "2018-01-22";
        }
        public function getContents()
        {
            return [
                'title' => $this->getTitle(),
                'date' => $this->getDate()
            ];
        }
    }

    $report = new Report();

    $JsonFormat = new JsonFormat();
    echo $JsonFormat->format($report->getContents()); 
    