# Larastan
                                                                                                                        
 [ERROR] Found 45 errors                                                                                                

1. Return Type with Generic Class Not Specifying Its Types
For methods returning relationships, you need to specify the return type correctly. In PHPStan, when dealing with Eloquent relationships, you should use the fully qualified name of the relationship type, including the namespace. 

To fix this, you can explicitly declare the return type using the full class name:

1. Methods Without Return Type Specified
PHPStan requires explicit return types for all methods unless they are declared as void. For methods without a return statement, it's best practice to declare them as void:

1. Parameters Without Type Specified
For parameters in methods, especially those used in scopes, you should specify the expected type. This helps PHPStan understand what kind of data is expected, improving type safety:                                 
                                                                                                         
 [OK] No errors level: 5                                                                                                    
                                                                                                                        

´´´
./vendor/bin/phpstan analyse


 ------ ---------------------------------------------------------------------------------------------------------------------------------------------------------------- 
  Line   Filament\Resources\PostResource.php
 ------ ---------------------------------------------------------------------------------------------------------------------------------------------------------------- 
  :119   Method App\Filament\Resources\PostResource::getEloquentQuery() return type with generic class Illuminate\Database\Eloquent\Builder does not specify its types:  
         TModelClass
 ------ ---------------------------------------------------------------------------------------------------------------------------------------------------------------- 

 ------ ----------------------------------------------------------------------------------- 
  Line   Http\Controllers\PostController.php
 ------ ----------------------------------------------------------------------------------- 
  :14    Method App\Http\Controllers\PostController::index() has no return type specified.  
  :28    Method App\Http\Controllers\PostController::show() has no return type specified.   
 ------ -----------------------------------------------------------------------------------

 ------ ----------------------------------------------------------------------------
  Line   Livewire\LikeButton.php
 ------ ----------------------------------------------------------------------------
  :14    Method App\Livewire\LikeButton::toggleLike() has no return type specified.
  :32    Method App\Livewire\LikeButton::render() has no return type specified.
 ------ ----------------------------------------------------------------------------

 ------ -------------------------------------------------------------------------------
  Line   Livewire\PostComments.php
 ------ -------------------------------------------------------------------------------
  :19    Method App\Livewire\PostComments::postComment() has no return type specified.
  :34    Method App\Livewire\PostComments::comments() has no return type specified.
  :52    Method App\Livewire\PostComments::render() has no return type specified.
 ------ -------------------------------------------------------------------------------

 ------ --------------------------------------------------------------------------------------------
  Line   Livewire\PostList.php
 ------ --------------------------------------------------------------------------------------------
  :17    Property App\Livewire\PostList::$activeCategory has no type specified.
  :21    Property App\Livewire\PostList::$sort has no type specified.
  :23    Property App\Livewire\PostList::$search has no type specified.
  :25    Property App\Livewire\PostList::$category has no type specified.
  :28    Property App\Livewire\PostList::$popular has no type specified.
  :29    Method App\Livewire\PostList::setSort() has no return type specified.
  :29    Method App\Livewire\PostList::setSort() has parameter $sort with no type specified.
  :34    Method App\Livewire\PostList::updateSearch() has no return type specified.
  :34    Method App\Livewire\PostList::updateSearch() has parameter $search with no type specified.
  :42    Method App\Livewire\PostList::clearFilters() has no return type specified.
  :49    Method App\Livewire\PostList::posts() has no return type specified.
  :80    Method App\Livewire\PostList::activeCategory() has no return type specified.
  :93    Method App\Livewire\PostList::render() has no return type specified.
 ------ --------------------------------------------------------------------------------------------

 ------ -----------------------------------------------------------------------------------------------------------------------------------------------------
  Line   Models\Category.php
 ------ -----------------------------------------------------------------------------------------------------------------------------------------------------
  :19    Method App\Models\Category::posts() return type with generic class Illuminate\Database\Eloquent\Relations\BelongsToMany does not specify its types:
         TRelatedModel
 ------ -----------------------------------------------------------------------------------------------------------------------------------------------------

 ------ -----------------------------------------------------------------
  Line   Models\Comment.php
 ------ -----------------------------------------------------------------
  :20    Method App\Models\Comment::user() has no return type specified.
  :24    Method App\Models\Comment::post() has no return type specified.
 ------ -----------------------------------------------------------------

 ------ -------------------------------------------------------------------------------------------------------------------------------------------------------------     
  Line   Models\Post.php
 ------ -------------------------------------------------------------------------------------------------------------------------------------------------------------     
  :36    Method App\Models\Post::author() return type with generic class Illuminate\Database\Eloquent\Relations\BelongsTo does not specify its types: TRelatedModel,      
         TChildModel
  :40    Method App\Models\Post::categories() return type with generic class Illuminate\Database\Eloquent\Relations\BelongsToMany does not specify its types:
         TRelatedModel
  :45    Method App\Models\Post::comments() has no return type specified.
  :49    Method App\Models\Post::likes() has no return type specified.
  :54    Method App\Models\Post::scopePublished() has no return type specified.
  :54    Method App\Models\Post::scopePublished() has parameter $query with no type specified.
  :58    Method App\Models\Post::scopeWithCategory() has no return type specified.
  :58    Method App\Models\Post::scopeWithCategory() has parameter $query with no type specified.
  :64    Method App\Models\Post::scopeFeatured() has no return type specified.
  :64    Method App\Models\Post::scopeFeatured() has parameter $query with no type specified.
  :68    Method App\Models\Post::scopePopular() has no return type specified.
  :68    Method App\Models\Post::scopePopular() has parameter $query with no type specified.
  :74    Method App\Models\Post::scopeSearch() has no return type specified.
  :74    Method App\Models\Post::scopeSearch() has parameter $query with no type specified.
  :88    Method App\Models\Post::getReadingTime() has no return type specified.
  :93    Method App\Models\Post::getThumbnailUrl() has no return type specified.
 ------ -------------------------------------------------------------------------------------------------------------------------------------------------------------     

 ------ ------------------------------------------------------------------
  Line   Models\User.php
 ------ ------------------------------------------------------------------
  :40    Method App\Models\User::isAdmin() has no return type specified.
  :44    Method App\Models\User::isEditor() has no return type specified.
  :90    Method App\Models\User::likes() has no return type specified.
  :95    Method App\Models\User::hasLiked() has no return type specified.
  :100   Method App\Models\User::comments() has no return type specified.
 ------ ------------------------------------------------------------------

                                                                                                                        
 [ERROR] Found 45 errors                           
