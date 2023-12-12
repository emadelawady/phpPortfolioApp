<?php declare(strict_types=1);

namespace Core\Validation;

use Core\Validation\Enums\EnumRules;
use Core\Validation\Rules\MaxCharacters;
use Core\Validation\Rules\Required;
use Core\Validation\Rules\ValidationRuleInterface;
use Core\Validation\Rules\ValidEmail;
use ReflectionAttribute;
use ReflectionClass;
use User;

class Validator
{
    private array $errors = [];

    public function validate(object $object, array $fieldNameArgs = []): void
    {


        // $fieldName = implode(',',$fieldNameArgs);

        // $words = substr($fieldName, strrpos($fieldName, ',') + 2);


        // dd($fieldNameArgs);


        // instantiate a $reflector using new ReflectionClass($object)
        $reflector = new ReflectionClass($object);

        

        // loop over the reflector properties
        foreach ($reflector->getProperties() as $property) {

            // Get Attributes using $property->getAttributes();
            // Only if it implements ValidationRuleInterface
            $attributes = $property->getAttributes(
                ValidationRuleInterface::class,
                ReflectionAttribute::IS_INSTANCEOF
            );



        
            // pre($property->name);
        //   dd($reflector, $reflector->name, $reflector->getMethods(), $reflector->getProperties());
            

            // loop over Attributes
            foreach ($attributes as $attribute) {         
                
                $validator = $attribute->newInstance()->getValidator();

                // dd($validator->validate());

                // pre($validator);

                // pre($property->getValue($object));


                // Ask if the property does not valid
             

                    // dd(strlen($property->getValue($object)));



                    if(!$validator->validate($property->getValue($object))){

                

                        $object_to_array = get_object_vars($object);

                        $array_keys = array_keys($object_to_array);

                        // dd($object_to_array);

                        // pre($validator->rule);



                        // $match = match ($property->getName()) { 
                        //     $property->getName() => $property->getName() .' ' . $attribute->getName()
                        // }; 

                        // pre($match);

                        

                        // $this->errors[$property->getName()][] = sprintf(
                        //     "Invalid Value '%s' is '%s' Validation.",
                        //     $property->getName(),
                        //     $validator->rule
                        // );

                        // pre($validator->rule);
                        // pre($validator->message);

                        $this->errors[$property->getName()][] = [
                            $validator->rule => $validator->message
                        ];

                        // $this->errors = array_reduce($this->errors, 'array_merge', array());

                        // array_merge_recursive($this->errors);
                        // $this->errors = array_merge($this->errors);


            }


        

                // dd($property->getValue($object));

                // add the property to errors with a message
                

               

            }

            // pre($property);
         
        }
        // dd($property->name);

     


      
        // $merge = array_reduce($property->getAttributes(MaxCharacters::class), 'array_merge', []);

        // $object_to_array = get_object_vars($object);

        // $array_keys = array_keys($object_to_array);

        // dd($array_keys);

        // dd($reflector->getProperty('email')->getAttributes(), $reflector->getProperty('password')->getAttributes());
        // dd($reflector->getProperties());
    

        // dd($this->errors);

    }


    public function getErrors()
    {

        // dd($this->errors);

        // dd(EnumRules::Empty->name, EnumRules::Empty->value);
        // $this->errors = array_merge_recursive($this->errors);


        // $this->errors = array_reduce($this->errors, 'array_merge', array());
        // $this->errors = array_reduce($this->errors, 'array_merge', array());

        // $this->errors = array_merge_recursive($this->errors);


        // dd($this->errors);

        return $this->errors;
    }


    public function check($field, $args)
    {

       

            $args = array_reduce($args, 'array_merge', array());



            $errors_err[$field] = $args; 



            dd($errors_err);
            // return $errors_err;



            // $map = array_map(function($arg){

            //     $arg[] = [

            //         array_reduce($arg, 'array_merge', array())
            //     ];

            //     // return array_reduce($arg, 'array_merge', array());
            //     // return $arg;


            // },$args);

            // dd($field,$args);

            // return $args;


            // dd($args);
            // foreach($args as $val):

            //     return '<p class="mt-3 text-xs text-red-600">' . $val . '</p>';
                
            // endforeach;

    }

}