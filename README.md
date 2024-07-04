# Larastan
                                                                                                         
 [OK] No errors level: 5                                                                                                    
                                                                                                                        

´´´
./vendor/bin/phpstan analyse

Note: Using configuration file phpstan.neon.
 61/61 [============================] 100%

 ------ -------------------------------------------------------------- 
  Line   Http\Controllers\HomeController.php
 ------ -------------------------------------------------------------- 
  :24    Relation 'categories' is not found in App\Models\Post model.  
  :28    Relation 'categories' is not found in App\Models\Post model.  
 ------ -------------------------------------------------------------- 

 ------ ------------------------------------------------------------- 
  Line   Http\Controllers\PostController.php
 ------ ------------------------------------------------------------- 
  :17    Relation 'posts' is not found in App\Models\Category model.  
 ------ ------------------------------------------------------------- 

 ------ -------------------------------------------------------------------------------------------------------
  Line   Livewire\PostComments.php
 ------ -------------------------------------------------------------------------------------------------------
  :45    Using nullsafe property access on non-nullable type $this(App\Livewire\PostComments). Use -> instead.
 ------ -------------------------------------------------------------------------------------------------------

 ------ --------------------------------------------------------------------------------------
  Line   Livewire\PostList.php
 ------ --------------------------------------------------------------------------------------
  :65    Relation 'author' is not found in App\Models\Post model.
  :67    Access to an undefined property App\Livewire\PostList::$activeCategory.
         💡 Learn more: https://phpstan.org/blog/solving-phpstan-access-to-undefined-property
 ------ --------------------------------------------------------------------------------------

 ------ ------------------------------------------------------------------------------------------------------
  Line   Models\Post.php
 ------ ------------------------------------------------------------------------------------------------------
  :75    Parameter #2 $allowed_tags of function strip_tags expects array<int, string>|string|null, int given.
 ------ ------------------------------------------------------------------------------------------------------

 ´´´
