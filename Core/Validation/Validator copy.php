<?php declare(strict_types=1);

namespace Core\Validation;

use Core\Validation\Enums\EnumRules;
use Core\Validation\Rules\Required;
use Core\Validation\Rules\ValidationRuleInterface;
use Core\Validation\Rules\ValidEmail;
use ReflectionAttribute;
use ReflectionClass;

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




        // dd($reflector->getProperties());



        

        // loop over the reflector properties
        foreach ($reflector->getProperties() as $property) {

            // Get Attributes using $property->getAttributes();
            // Only if it implements ValidationRuleInterface
            $attributes = $property->getAttributes(
                ValidationRuleInterface::class,
                ReflectionAttribute::IS_INSTANCEOF
            );

           
          

            // loop over Attributes
            foreach ($attributes as $attribute) {

               
                
                // dd($attribute->newInstance());
                // call $attribute->getValidator()

                $validator = $attribute->newInstance()->getValidator();

                // dd($validator->validate());


               

            

            


                // Ask if the property does not valid
                if(!$validator->validate($property->getValue($object))){

                    // dd(strlen($property->getValue($object)));


                    // $this->errors[$property->getName()][] = sprintf(
                    //     "Invalid Value '%s' using '%s' Validation.",
                    //     $property->getName(),
                    //     $attribute->getName()
                    // );


                    // dd($validator->validate($property->getValue($object)) == '');

                    // dd($attribute->getArguments()['min']);

                    
                    if($attribute->getArguments()){

                        // foreach ($attribute->getArguments() as $args) {

                            // dd($attribute->getArguments()['min']);

                            if(isset($attribute->getArguments()['min']))
                            {
                                    // foreach($fieldNameArgs as $fileName){ 
                                    $this->errors[] = [
                                        rand(10,20)."-min" => $attribute->getArguments()['min']. " " .EnumRules::Min->value
                                    ];
                                // }
                                
                            }

                            if(isset($attribute->getArguments()['max']))
                            {
                                $this->errors[] = [
                                    'max' => $attribute->getArguments()['max']. " " .EnumRules::Max->value,
                                ];

                            }

                            
    

                        //    $ss = $property->getValue($object);

                            // dd($this->errors, $attribute->getArguments(), $attribute, $validator->validate($property->getValue($object)));
    
                        // }
    
                    } else{

                        // dd($this->errors, $attribute->getArguments(), $attribute->getName(), ValidEmail::class, $property, $validator->validate($property->getValue($object)));

                        // dd($attribute->getName() === Required::class);

                        // dd($property->getName());

                        // if($property->getName()){


                    if($attribute->getName() === Required::class){

                        $this->errors[] = [
                            $property->getName() => $property->getName(). " " .EnumRules::Empty->value,
                        ];

                    }
                    if($attribute->getName() === ValidEmail::class){

                        $this->errors[] = [
                            $property->getName().'Valid' =>  EnumRules::Email->value,
                        ];

                    }

                // }


                }


        

                // dd($property->getValue($object));

                // add the property to errors with a message
                
                
                } 
            }




        }



        // dd($this->errors);

    }


    public function getErrors()
    {

        // dd($this->errors);

        // dd(EnumRules::Empty->name, EnumRules::Empty->value);

        $this->errors = array_reduce($this->errors, 'array_merge', array());

        // dd($this->errors);

        return $this->errors;
    }

}