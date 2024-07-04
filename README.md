# Larastan
                                                                                                                        

> A. Return Type with Generic Class Not Specifying Its Types
- For methods returning relationships, you need to specify the return type correctly. In PHPStan, when dealing with Eloquent relationships, you should use the fully qualified name of the relationship type, including the namespace. 

To fix this, you can explicitly declare the return type using the full class name:

> Methods Without Return Type Specified
- PHPStan requires explicit return types for all methods unless they are declared as void. For methods without a return statement, it's best practice to declare them as void:

> Parameters Without Type Specified
- For parameters in methods, especially those used in scopes, you should specify the expected type. This helps PHPStan understand what kind of data is expected, improving type safety:                                 
                                                                                                         
 [OK] No errors level: 5                                                                                                    
                                                                                                                        

´´´
./vendor/bin/phpstan analyse


                  
