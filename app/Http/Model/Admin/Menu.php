<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Admin\Menu
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $icon
 * @property string $type
 * @property int $permission
 * @property string $block
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Admin\Menu whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Admin\Menu whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Admin\Menu whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Admin\Menu whereIcon($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Admin\Menu whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Admin\Menu wherePermission($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Admin\Menu whereBlock($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Admin\Menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Admin\Menu whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Menu extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menu_admin';
    protected $guarded = ['id', 'account_id'];

    /**
     * Мутод для загрузки бокового меню
     * @return array
     */
    public function viewMenu()
    {
        $listMenu = [];
    	$menu = $this->all()
            ->where('block', "0");

    	foreach ($menu as $key => $value){
            $listMenu[$value['url']] = $value->attributes;
            unset($listMenu[$value['url']]['url']);
        }

        unset($menu);

        return $listMenu;
    }
}
