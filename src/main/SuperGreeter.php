<?php
namespace App;

class Greeter {
  public function greet(string $name = null): string {
    if ($name) {
      return "Hello, $name!";
    }

    setcookie("TestCookie", $value, time()+3600, "/~path/", ".com", 1); // Noncompliant

    return "Hello World!";
  }
}
