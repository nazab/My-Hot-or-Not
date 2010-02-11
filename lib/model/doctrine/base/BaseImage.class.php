<?php

/**
 * BaseImage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $url
 * @property integer $vote_sum
 * @property integer $vote_count
 * @property integer $vote_avg
 * @property Vote $Vote
 * 
 * @method string  getUrl()        Returns the current record's "url" value
 * @method integer getVoteSum()    Returns the current record's "vote_sum" value
 * @method integer getVoteCount()  Returns the current record's "vote_count" value
 * @method integer getVoteAvg()    Returns the current record's "vote_avg" value
 * @method Vote    getVote()       Returns the current record's "Vote" value
 * @method Image   setUrl()        Sets the current record's "url" value
 * @method Image   setVoteSum()    Sets the current record's "vote_sum" value
 * @method Image   setVoteCount()  Sets the current record's "vote_count" value
 * @method Image   setVoteAvg()    Sets the current record's "vote_avg" value
 * @method Image   setVote()       Sets the current record's "Vote" value
 * 
 * @package    MyHON
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseImage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('image');
        $this->hasColumn('url', 'string', 1000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '1000',
             ));
        $this->hasColumn('vote_sum', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('vote_count', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('vote_avg', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Vote', array(
             'local' => 'id',
             'foreign' => 'image_id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}