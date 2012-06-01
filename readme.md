Usage example
=============

```php
class Page extends Eloquent
{
	......
	
	public function set_name($name)
	{
		$this->set_attribute('name', $name);
    	$this->set_attribute('slug', Slug::create_unique($name, $this));
	}
	
	....
}
```