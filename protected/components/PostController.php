<?php
class PostController extends CController
{
/**
@return Post[] a list of posts
@soap
*/
public function getPosts() { return Post::model()->findAll(); }
}
class Post extends CActiveRecord
{
/**
@var integer post ID
@soap
*/
public $id;
/**
@var string post title
@soap
*/
public $title;
public static function model($className=_CLASS_)
{ return parent::model($className); }
}
class PostController extends CController
{
    public function actions()
    {
        return array(
            'service'=>array(
                'class'=>'CWebServiceAction',
                'classMap'=>array(
                    'Post'=>'Post',  // or simply 'Post'
                ),
            ),
        );
    }
    ......
}
)