<?php

class AlbumController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        // dd($input = Input::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
 //print_r($_POST);exit;
       $album = new Album;
       $album->title = Input::get('title');
       $album->tags = Input::get('tags');
       $album->image = $_FILES['image']['name'];
        
//       $targetfolder = 'E:\new\xampp\htdocs\traning\public\uploads\\';
//       $targetfolder = $targetfolder . basename($_FILES['image']['name']);
//       if (move_uploaded_file($_FILES['image']['tmp_name'], $targetfolder)) 
//           {
//               echo "The file " . basename($_FILES['image']['name']) . " is uploaded";
//               }
       if($_FILES['image']['name'])
       {
           
           $valid_exts = array('jpeg', 'jpg', 'png', 'gif');
//$max_file_size = 200 * 1024; #200kb
$max_file_size = 1024 * 768; 
$nw = $nh = 200; # image with # height

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if ( isset($_FILES['image']) ) {
		if (! $_FILES['image']['error'] && $_FILES['image']['size'] < $max_file_size) {
			$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
			if (in_array($ext, $valid_exts)) {
					$path = 'uploads/' . uniqid() . '.' . $ext;
					$size = getimagesize($_FILES['image']['tmp_name']);

					$x = (int) $_POST['x'];
					$y = (int) $_POST['y'];
					$w = (int) $_POST['w'] ? $_POST['w'] : $size[0];
					$h = (int) $_POST['h'] ? $_POST['h'] : $size[1];

					$data = file_get_contents($_FILES['image']['tmp_name']);
					$vImg = imagecreatefromstring($data);
					$dstImg = imagecreatetruecolor($nw, $nh);
					imagecopyresampled($dstImg, $vImg, 0, 0, $x, $y, $nw, $nh, $w, $h);
					imagejpeg($dstImg, $path);
					imagedestroy($dstImg);
					echo "<img src='$path' />";
					
				} else {
					echo 'unknown problem!';
				} 
		} else {
			echo 'file is too small or large';
		}
	} else {
		echo 'file not set';
	}
} else {
	echo 'bad request!';
}

       }
                  
      $album->save() ;

     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        
    }

}
