<?PHP
class OS_BR{

    private $agent = "";
    private $info = array();

    function __construct(){
        $this->agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : NULL;
        $this->getBrowser();
    }

    function getBrowser(){
        $browser = array("Navigator"            => "/Navigator(.*)/i",
                         "Firefox"              => "/Firefox(.*)/i",
                         "Internet Explorer"    => "/MSIE(.*)/i",
                         "Microsoft Edge"       => "/Edge(.*)/i",                         
                         "Google Chrome"        => "/chrome(.*)/i",
                         "MAXTHON"              => "/MAXTHON(.*)/i",
                         "Opera"                => "/Opera(.*)/i",
                         );
        foreach($browser as $key => $value){
            if(preg_match($value, $this->agent)){
                $this->info = array_merge($this->info,array("Browser" => $key));
                $this->info = array_merge($this->info,array(
                  "Version" => $this->getVersion($key, $value, $this->agent)));
                break;
            }else{
                $this->info = array_merge($this->info,array("Browser" => "UnKnown"));
                $this->info = array_merge($this->info,array("Version" => "UnKnown"));
            }
        }
        return $this->info['Browser'];
    }


    function getVersion($browser, $search, $string){
        $browser = $this->info['Browser'];
        $version = "";
        $browser = strtolower($browser);
        preg_match_all($search,$string,$match);
        switch($browser){
            case "firefox": $version = str_replace("/","",$match[1][0]);
            break;

            case "internet explorer": $version = substr($match[1][0],0,4);
            break;

            case "opera": $version = str_replace("/","",substr($match[1][0],0,5));
            break;

            case "navigator": $version = substr($match[1][0],1,7);
            break;

            case "maxthon": $version = str_replace(")","",$match[1][0]);
            break;

            case "microsoft edge": $version = str_replace("/","",$match[1][0]);
            break;

            case "google chrome": $version = substr($match[1][0],1,10);
        }
        return $version;
    }

    function showInfo($switch){
        $switch = strtolower($switch);
        switch($switch){
            case "browser": return $this->info['Browser'];
            break;

            case "version": return $this->info['Version'];
            break;

            case "all" : return array($this->info["Version"], 
            $this->info['Browser']);
            break;

            default: return "Unknown";
            break;

        }
    }
}

$obj = new OS_BR();
?>		

<!DOCTYPE html>
<html>
<head>
    <title>tugas 5</title>
    <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
</head>
<body style=" text-align: center; background-image:url(background.jpg); font-family: 'Contrail One', cursive;">
    <div>  <h1 style="color: #ae5a41">Hai <?php session_start(); echo $_SESSION['login'].","; ?>
        <script type="text/javascript">  var today = new Date();  var hour = today.getHours();
        if(hour >= 4 && hour < 10 ){   document.write ("Selamat Pagi!")  }
        else if (hour>=10 && hour<=14){   document.write ("Selamat Siang!")  }
        else if (hour>14 && hour<=18){   document.write ("Selamat Sore!")  }
        else {   document.write ("Selamat Malam!")  } 
        </script>
    </h1>
        <br>
    </div>
    <div>   
        <h1 style="text-align: center; color: #ae5a41">Kamu sedang menggunakan browser:<br>
            <?php echo $obj->showInfo('browser')." versi ".$obj->showInfo('version'); ?>
        </h1>
    </div>      
</body>
</html>