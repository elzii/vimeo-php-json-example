<?

class Vimeo {

    private $ch;

    public function __construct() {
        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
        curl_setopt($this->ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
    }

    public function getJSON($ID) {
        $url = "http://vimeo.com/api/v2/video/" . $ID .".json";
        curl_setopt($this->ch, CURLOPT_URL, $url);
        $output = curl_exec($this->ch);
        return json_decode($output);
    }


}
