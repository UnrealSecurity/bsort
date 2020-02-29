# bsort
My bubble sort functions for some programming languages.
**Note:** You can also sort object arrays by object's property.

### PHP
```php
$items = array(9, 5, 6, 2, 1, 8, 3, 4, 7);
$items = bsort($items, function($a, $b){ return $a > $b; });

echo join(', ', $items);
```

### JavaScript
```javascript
var items = [9, 5, 6, 2, 1, 8, 3, 4, 7];
items = bsort(items, (a, b)=>{ return a > b; });

console.log(items.join(', '));
```
