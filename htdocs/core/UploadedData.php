<?php
    class UploadedData{

        private $data = []; 
        private $min_values = [];
        private $max_values = [];
        private $sums = [];//sumy wartosci
        private $avgs = [];//srednie
        private $variances = [];//wariancja
        private $medians = [];//mediana
        private $std_deviations = [];//odchylenie standardowe
        private $quartile25 = [];//kwartyl pierwszego rzędu
        private $quartile75 = [];//kwartyl trzeciego rzędu
        private $iqr = [];//rozstępy między kwartylowe Q3-Q1
        private $quantile90 = [];//kwantyl 90%
        private $quantile10 = [];//kwantyl 10% 

        public function set_data($uploadfile){
            if(($csv_file = fopen($uploadfile, "r"))!=FALSE){
                $i = 0;
                $row = fgetcsv($csv_file, 1000, ";");
                foreach($row as $var){
                    if(is_numeric($var) ==1){
                        $this->min_values[$i]=$var;
                        $this->max_values[$i]=$var;
                    }
                    else{
                        $this->min_values[$i]=PHP_INT_MAX;
                        $this->max_values[$i]=PHP_INT_MIN;
                    }
                    $i++;
                }
                while (($row = fgetcsv($csv_file, 1000, ";")) != FALSE) 
                {	
                    $this->data[]=$row;
                    $i = 0;
                    foreach($row as $var){
                        if(is_numeric($var) ==1){
                            if($this->min_values[$i]>=$var)
                                $this->min_values[$i]=$var;
                            if($this->max_values[$i]<=$var)
                                $this->max_values[$i]=$var;
                            $this->sums[$i] += $var;
                        }
                        $i++;
                    }
                }
                fclose($csv_file);
            }
        }

        public function get_data(){
            return $this->data;
        }


        public function get_min_values(){
            return $this->min_values;
        }


        public function get_max_values(){
            return $this->max_values;
        }

        public function get_sums(){
            return $this->sums;
        }

        public function set_avgs(){
            $number_of_data = count($this->data);
            $i = 0;
            foreach($this->sums as $sum){
                $this->avgs[$i] = $sum/$number_of_data;
                $i++;
            }
        }

        public function get_avgs(){
            return $this->avgs;
        }

        public function set_medians(){
            $noarg = count($this->data[1]);
            $i = 0;
            for($i; $i<$noarg; $i++){
                $tmp = [];
                foreach($this->data as $row){
                    $tmp[] = $row[$i];
                }
                sort($tmp);
                $this->medians[$i]=$this->getMedian($tmp);

            }
        }

        public function get_medians(){
            return $this->medians;
        }


        public function set_variance_stdDiv(){
            if(empty($avgs))
                $this->set_avgs();
            $noarg = count($this->data[1]);
            $i = 0;
            for($i; $i<$noarg; $i++){
                $variance = 0;
                foreach($this->data as $row){
                    $variance += pow(($row[$i]-$this->avgs[$i]),2);
                }
                $this->variances[$i]=$variance/(count($this->data)-1);
                $this->std_deviations[$i]=sqrt($this->variances[$i]);
            }
        }

        public function get_variances(){
            return $this->variances;
        }

        public function get_std_deviations(){
            return $this->std_deviations;
        }

        public function set_quartile(){
            $noarg = count($this->data[1]);
            $i = 0;
            for($i; $i<$noarg; $i++){
                $tmp = [];
                foreach($this->data as $row){
                    $tmp[] = $row[$i];
                }
                sort($tmp);
                $this->quartile25[$i]=$this->quartile($tmp, 0.25);
                $this->quartile75[$i]=$this->quartile($tmp, 0.75);
                $this->iqr[$i]=$this->quartile75[$i]-$this->quartile25[$i];

            }
        }

        public function get_quartile25(){
            return $this->quartile25;
        }

        public function get_quartile75(){
            return $this->quartile75;
        }

        public function get_iqr(){
            return $this->iqr;
        }

        public function set_quantile(){
            $noarg = count($this->data[1]);
            $i = 0;
            for($i; $i<$noarg; $i++){
                $tmp = [];
                foreach($this->data as $row){
                    $tmp[] = $row[$i];
                }
                sort($tmp);
                $this->quantile90[$i]=$this->quartile($tmp, 0.9);
                $this->quantile10[$i]=$this->quartile($tmp, 0.1);
            }
        }

        public function get_quantile90(){
            return $this->quantile90;
        }

        public function get_quantile10(){
            return $this->quantile10;
        }



        private function getMedian($arr) {
            if(!is_array($arr)){
                throw new Exception('$arr must be an array!');
            }
            if(empty($arr)){
                return false;
            }
            $num = count($arr);
            $middleVal = floor(($num - 1) / 2);
            if($num % 2) { 
                return $arr[$middleVal];
            } 
            else {
                $lowMid = $arr[$middleVal];
                $highMid = $arr[$middleVal + 1];
                return (($lowMid + $highMid) / 2);
            }
        }

        public function quartile($array, $quartile) {
            // quartile position is number in array + 1 multiplied by the quartile i.e. 0.25, 0.5, 0.75
            $pos = (count($array) + 1) * $quartile;
            // if the position is a whole number
            // return that number as the quarile placing
            if ( fmod($pos, 1) == 0)
            {
                return $array[$pos];
            }
            else
            {
                // get the decimal i.e. 5.25 = .25
                $fraction = $pos - floor($pos);
                // get the values in the array before and after position
                $lower_num = $array[floor($pos)-1];
                $upper_num = $array[ceil($pos)-1];
                // get the difference between the two
                $difference = $upper_num - $lower_num;
                // the quartile value is then the difference multipled by the decimal
                // add to the lower number
                return $lower_num + ($difference * $fraction);
            }
        }

        public function quantile($array, $quartile) {
            // quartile position is number in array + 1 multiplied by the quartile i.e. 0.25, 0.5, 0.75
            $pos = (count($array) + 1) * $quartile;
            // if the position is a whole number
            // return that number as the quarile placing
            if ( fmod($pos, 1) == 0)
            {
                return $array[$pos];
            }
            else
            {
                // get the decimal i.e. 5.25 = .25
                $fraction = $pos - floor($pos);
                // get the values in the array before and after position
                $lower_num = $array[floor($pos)-1];
                $upper_num = $array[ceil($pos)-1];
                // get the difference between the two
                $difference = $upper_num - $lower_num;
                // the quartile value is then the difference multipled by the decimal
                // add to the lower number
                return $lower_num + ($difference * $fraction);
            }
        }

    }



