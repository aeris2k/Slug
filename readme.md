Usage example
=============

```php
public function set_name($name)
{
	$this->set_attribute('name', $name);
    $this->set_attribute('slug', Slug::create_unique($name, $this));
}
```