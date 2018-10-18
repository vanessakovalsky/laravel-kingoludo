<?php

namespace App\Model;

use App\Events\SaveGame;
use Illuminate\Database\Eloquent\Model;
use App\Model\GameCollection;

class ModelGame extends Model
{
    protected $table="model_games";

    /*
     * @string
    */
    protected $title;

    /*
     * @date
     */
    protected $year_exit;


    /*
       * @string
      */
    protected $editor;

    protected $fillable = ['title', 'editor', 'year_exit'];

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'saved' => SaveGame::class,
    ];


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return ModelGame
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getYearExit()
    {
        return $this->year_exit;
    }

    /**
     * @param mixed $year_exit
     * @return ModelGame
     */
    public function setYearExit($year_exit)
    {
        $this->year_exit = $year_exit;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @param mixed $editor
     * @return ModelGame
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
        return $this;
    }

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function gameCollection(){
        return $this->belongsToMany(GameCollection::class);
    }

}
