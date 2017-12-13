<?php 

// An interface can only define public methods. 
interface Provider {
  public function authorize();
}

function login(Provider $provider)
{
  $provider->authorize();
}

// An abstract class cannot be instantiated on its own 
// Can create abstract protected methods 
abstract class Provider {
  abstract protected function getAuthorizationUrl();
}
// requires that a subclass creates and implements method above

class FacebookProvider extends Provider {
  protected function getAuthorizationUrl()
  {
    return '';
  }
}

// An interface defines a public api. A contract that any implementation has to obey. No logic will be stored in an interface. 

// An abstract class can enforce a contract by creating abstract methods and that way any subclass must obey. Must also resort to inheritance which isn't always the best idea. 