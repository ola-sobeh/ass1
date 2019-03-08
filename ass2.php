<?php 
   class Section{
   	private $time;
    private $place;
    private $course;
    public function setTime($t){$this->time=$t;}
   public function getTime(){return $this->time;}
   public function setPlace($p) {

                        $this->place = $p;
    }
   public function getPlace(){return $this->place;}
   
   public function setcourse($n){$this->course=$n;}
   public function getcourse(){return $this->course;}
   public function __construct($time, $place,$course ){
         $this->setTime($time);
         $this->setPlace($place );
         $this->setcourse($course);
        
     }}
     

   ?>
   <!DOCTYPE html>
   <html>
   <head>
   </head>
   <body>
   	<?php   $s = new Section("10am","N107","database");?>
   	<ul>
      <li> <?php echo  $s->getTime();  ?> </li>
   		<li> <?php echo  $s->getPlace();  ?> </li>
      <li> <?php echo  $s->getcourse();  ?> </li>
      

   	</ul>
   
   </body>
   </html>
  <?php 
  class Appointment {
    private $time;
    private $place;
    static $count;
   public function setTime($m){$this->time=$m;}
   public function getTime(){return $this->time;}
   public function setPlace($c) {

                        $this->place = $c;
        
    }
   public function getPlace(){return $this->place;}     
   public function __construct($time, $place ){
         $this->setTime($time);
         $this->setPlace($place );
         $count++;
     }

 public function __destruct(){
     echo "<br>the Appointment passed...";
  }
  
}
   ?>

