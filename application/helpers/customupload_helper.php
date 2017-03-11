<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
  if( !function_exists('fileUpload') ) {
  
     function fileUpload($file, $fileName, $fileType, $path, $newFileName) {
        $config = array();
        $ci = & get_instance();
        $ci->load->library('upload');
        $config['allowed_types'] = $fileType;
        $config['upload_path'] = $path;
        //$new_name = $fileName . "-" . strtolower(str_replace(' ', '-', $businessname));
       // $new_name = $newFileName;
        $config['file_name'] = $newFileName;

        $ci->upload->initialize($config);

        if (!$ci->upload->do_upload($fileName)) {
            $error = array('error' => $ci->upload->display_errors());

            $status = array(
                'status' => false,
                'data' => $error['error']
            );

            return $status;
        } else {
            $fileDetail = $ci->upload->data();
            $status = array(
                'status' => true,
                'data' => $fileDetail['file_name']
            );
            return $status;
        }
    }

  }