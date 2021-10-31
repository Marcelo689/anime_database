<?php
	@$url = $_POST["url"];
	if(isset($url)){
    function scrape($URL){
        //cURL options
        $options = Array(
                    CURLOPT_RETURNTRANSFER => TRUE, //return html data in string instead of printing it out on screen
                    CURLOPT_FOLLOWLOCATION => TRUE, //follow header('Location: location');
                    CURLOPT_CONNECTTIMEOUT => 60, //max time to try to connect to page
                    CURLOPT_HEADER => FALSE, //include header
                    CURLOPT_USERAGENT => "Mozilla/5.0 (X11; Linux x86_64; rv:21.0) Gecko/20100101 Firefox/21.0", //User Agent
                    CURLOPT_URL => $URL //SET THE URL
                    );

        $ch = curl_init($URL);//initialize a cURL session
        curl_setopt_array($ch, $options);//set the cURL options
        $data = curl_exec($ch);//execute cURL (the scraping)
        curl_close($ch);//close the cURL session

        return $data;
    }

    function parse(&$data, $query, &$dom){
        $Xpath = new DOMXpath($dom); //new Xpath object associated to the domDocument
        $result = $Xpath->query($query);//run the Xpath query through the HTML
        //var_dump($result);
        return $result;
    }


    //new domDocument
    $dom = new DomDocument("1.0"); 

    //Scrape and parse
    $data = scrape($url); //scrape the website
    @$dom->loadHTML($data); //load the html data to the dom

    $XpathQuery = '//iframe'; //Your Xpath query could look something like this
    $iframes = parse($data, $XpathQuery, $dom); //parse the HTML with Xpath

    foreach($iframes as $iframe){

        $src = $iframe->getAttribute('src'); //get the src attribute
        echo '<br><iframe  allowfullscreen="true" height="100%" src="' . $src . '"></iframe>'; //echo the iframes
    }
	}
?>