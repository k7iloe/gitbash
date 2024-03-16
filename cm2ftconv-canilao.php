<?php
class cm2ftconv {
    private $cmft;
    public function convert($cm) {
        $this->cmft = $cm * 0.0328084;
        return $this->cmft;
    }
}
$conversion = new cm2ftconv();
echo "the cm conversion of 1 to feet is: ". $conversion->convert(59);
?>