public $color;
public $value;

public function __construct($color = null, $value = null)
{
    $this->color = $color;
    $this->value = $value;
}

public function render()
{
    return view('components.dynamic-component');
}
