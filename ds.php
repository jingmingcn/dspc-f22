<?php

function get_basename($filename){ return preg_replace('/^.+[\\\\\\/]/', '', $filename); }

function endsWith($haystack, $needle) {
    $length = strlen($needle);
    return $length > 0 ? substr($haystack, -$length) === $needle : true;
}

/**
 * Represent a custom Directory class more easy to use for my need
 */
class DirectoryLister implements JsonSerializable{
    
    private $path;
    private $include_items;

    /**
     * Instanciate a Directory with a path
     * @param string $path
     */
    function __construct(string $path, array $include_items){
        $this->include_items = $include_items;
        //check before if the file exists
        if(file_exists($path)){
            $this->path = $path;
        }else{
            throw new Exception("File not exist: $path");
        }
    }
    
    /**
     * Return filenames containing in this directory
     */
    function walk(){
        // scan directory and  
        foreach( scandir($this->path) as $basename){
            $new_path = $this->path.DIRECTORY_SEPARATOR.$basename ;
            // TODO: add a regex test
            if(!in_array($basename, ['.', '..']) && file_exists($new_path) ){
                yield $new_path;
            }
        }
    }
    
    /**
     * Convert this object into an array
     * @return array
     */
    function to_a(&$directories=null):array{
        if(!$directories){
            $directories = [];
        }
        
        $that = $this;
        foreach($this->walk() as $file){

            $array = [];
            
            // if it's a directory, we loop on it
            if(is_dir($file)){
                $sub_dir = new DirectoryLister($file, $that->include_items);
                $name = get_basename($file) ;
                $array['name'] = $name;
                //$array['title'] = $name;
                $array['className'] = 'dir';
                $array['children'] = $sub_dir->to_a();
                array_push($directories, $array);
            // if it's a file
            }else{
                $name = get_basename($file) ;
                foreach($this->include_items as $item){
                    if(endsWith($name,$item)){
                        $array['name'] = $name;
                        $array['url'] = $file;
                        $array['className'] = 'file';
                        array_push($directories, $array);
                    }
                }
                
            }  
        }
        return $directories;
        
    }
    
    /**
     * Overwritted unction to specify json_encode() output
     * @return array
     */
    function jsonSerialize(){
        $name = get_basename($this->path);
        $array = [];
        $array['name'] = $name;
        //$array['title'] = $name;
        $array['dir'] = $name;
        $array['className'] = 'dir';
        $array['children'] = $this->to_a();
        return $array;
    }
    
    // function get_basename():string{return basename($this->path);}
    
    
}

$dir = $_GET['dir'];
$include_items = array('.pdf');
$data = new DirectoryLister($dir, $include_items);

header('Content-Type: application/json');

echo json_encode($data,JSON_UNESCAPED_UNICODE);

?>