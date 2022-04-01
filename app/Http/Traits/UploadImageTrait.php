<?php 


namespace App\Http\Traits;


trait UploadImageTrait {

	 public function uploadImage($file,$folderName){
        try {
            $destination_path = public_path().'/images/'.$folderName;

            if($file->getClientOriginalExtension() == 'png' || $file->getClientOriginalExtension() == 'jpg' || $file->getClientOriginalExtension() == 'jpeg'){

            if (!file_exists($destination_path)) {  
                mkdir($destination_path, 0777);
            }

            $filename = $file->getClientOriginalName();
            $image = date('His') . $filename;
            
            $file->move($destination_path, $image);
            $destination_path = 'images/'.$folderName.'/'.$image;
             return (['status' => '200' , 'path' => $destination_path]);
            }else{
                  return (['status' => '401' , 'path' => '']);
                }
            } catch (\Exception $e) {
               return (['status' => '400' , 'path' => '']);
            }

    }

	}
?>