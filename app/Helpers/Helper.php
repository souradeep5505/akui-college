<?php

namespace App\Helpers;
use Session;
use DB;
use App\Models\Department;
use App\Models\GalleryCategory;
use App\Models\Subject;
use Illuminate\Support\Facades\Http;
class Helper
{
    public static function imageConvert($abb,$path="",$data)
    {
      if ($data!=null) {
        $image = $data;
        //$new_file_name = $abb.time().'.jpg';
        $new_file_name = $abb.rand('0000','9999').'_'.time().'.'.$image->getClientOriginalExtension();
        $destinationPath = 'public/images/'.$path;
         if ( !file_exists( $destinationPath ) && !is_dir( $destinationPath ) ) {
            mkdir( $destinationPath );
        }
        $image->move($destinationPath,$new_file_name);
         return $new_file_name;
         }
    }

    public static function slugGenarate($url)
    {
        $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($url)));
        return $slug;
    }

    public static function DepartmentName($id)
    {
       $data=Department::find($id);
       return (!empty($data->id)) ? $data->department_name : '';
    }

    public static function GalleryCatName($id)
    {
       $data=GalleryCategory::find($id);
       return (!empty($data->id)) ? $data->cat_name : '';
    }

    public static function SubjectName($id)
    {
       $data=Subject::find($id);
       return (!empty($data->id)) ? $data->subject_name : '';
    }
}
