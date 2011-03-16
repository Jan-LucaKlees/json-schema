<?php

class ArraysTest extends BaseTestCase
{
    public function getInvalidTests()
    {
        return array(
            array(
                '{
                  "array":[1,2,"a"]
                }',
                '{
                  "type":"object",
                  "properties":{
                    "array":{
                      "type":"array",
                      "items":{"type":"number"}
                    }
                  }
                }'
            ),
            array(
                '{
                  "array":[1,2,null]
                }',
                '{
                  "type":"object",
                  "properties":{
                    "array":{
                      "type":"array",
                      "items":{"type":["number","boolean"]}
                    }
                  }
                }'
            )
        );
    }
    
    public function getValidTests()
    {
        return array(
            array(
                '{
                  "array":[1,2,"a"]
                }',
                '{
                  "type":"object",
                  "properties":{
                    "array":{"type":"array"}
                  }
                }'
            )
        );
    }
}
