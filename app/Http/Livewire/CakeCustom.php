<?php

namespace App\Http\Livewire;

use App\Models\CakeCustom as ModelsCakeCustom;
use RealRashid\SweetAlert\Facades\Alert;
use Livewire\Component;
use Livewire\WithFileUploads;

class CakeCustom extends Component
{
    use WithFileUploads;

    public $cakeTypes = [];
    public $cakeTypePrices = [];
    public $cakeShapes = [];
    public $cakeShapePrices = [];
    public $cakeSizes = [];
    public $cakeSizePrices = [];
    public $cakeLayers = [];
    public $cakeLayerPrices = [];
    public $imageDecorations = [];
    public $cakeDecorations = [];
    public $cakeDecorationPrices = [];

    public $newCakeType;
    public $newCakeTypePrice;
    public $newCakeShape;
    public $newCakeShapePrice;
    public $newCakeSize;
    public $newCakeSizePrice;
    public $newCakeLayer;
    public $newCakeLayerPrice;
    public $newCakeDecoration;
    public $newCakeDecorationPrice;
    public $newDecorationImg;


    protected $listeners = ['fileUpload' => 'handleFileUpload'];

    public function handleFileUpload($imageData)
    {
        $this->newDecorationImg = $imageData;
    }

    public function addCakeType()
    {
        $this->validate([
            'newCakeType' => 'required',
            'newCakeTypePrice' => 'required|regex:/^\d{1,13}(\.\d{1,2})?$/'
        ]);

        // Check if customCake already exists
        $user_id = auth()->id();
        $checkCakeCustom = ModelsCakeCustom::where('user_id', $user_id)->first();

        if ($checkCakeCustom) {
            // Update the existing entry
            $cakeTypeData = json_decode($checkCakeCustom->cake_type, true);
            $cakeTypePriceData = json_decode($checkCakeCustom->cake_type_price, true);

            array_unshift($cakeTypeData, ['cake_type' => $this->newCakeType]);
            array_unshift($cakeTypePriceData, ['cake_type_price' => $this->newCakeTypePrice]);

            $checkCakeCustom->cake_type = json_encode($cakeTypeData);
            $checkCakeCustom->cake_type_price = json_encode($cakeTypePriceData);
            $checkCakeCustom->save();
        }

        array_unshift($this->cakeTypes, ['cake_type' => $this->newCakeType]);
        array_unshift($this->cakeTypePrices, ['cake_type_price' => $this->newCakeTypePrice]);

        // Reset input fields
        $this->newCakeType = '';
        $this->newCakeTypePrice = '';
    }

    public function deleteCakeType($index)
    {
        if (isset($this->cakeTypes[$index]) && isset($this->cakeTypePrices[$index])) {
            unset($this->cakeTypes[$index]);
            unset($this->cakeTypePrices[$index]);

            // Re-index the arrays
            $this->cakeTypes = array_values($this->cakeTypes);
            $this->cakeTypePrices = array_values($this->cakeTypePrices);

            $this->updateDatabase();
        }
    }

    public function addCakeShape()
    {
        $this->validate([
            'newCakeShape' => 'required',
            'newCakeShapePrice' => 'required|regex:/^\d{1,13}(\.\d{1,2})?$/'
        ]);

        // Check if customCake already exists
        $user_id = auth()->id();
        $checkCakeCustom = ModelsCakeCustom::where('user_id', $user_id)->first();

        if ($checkCakeCustom) {
            // Update the existing entry
            $cakeShapeData = json_decode($checkCakeCustom->cake_shape, true);
            $cakeShapePriceData = json_decode($checkCakeCustom->cake_shape_price, true);

            array_unshift($cakeShapeData, ['cake_shape' => $this->newCakeShape]);
            array_unshift($cakeShapePriceData, ['cake_shape_price' => $this->newCakeShapePrice]);

            $checkCakeCustom->cake_shape = json_encode($cakeShapeData);
            $checkCakeCustom->cake_shape_price = json_encode($cakeShapePriceData);
            $checkCakeCustom->save();
        }

        array_unshift($this->cakeShapes, ['cake_shape' => $this->newCakeShape]);
        array_unshift($this->cakeShapePrices, ['cake_shape_price' => $this->newCakeShapePrice]);

        // Reset input fields
        $this->newCakeShape = '';
        $this->newCakeShapePrice = '';
    }

    public function deleteCakeShape($index)
    {
        if (isset($this->cakeShapes[$index]) && isset($this->cakeShapePrices[$index])) {
            unset($this->cakeShapes[$index]);
            unset($this->cakeShapePrices[$index]);

            // Re-index the arrays
            $this->cakeShapes = array_values($this->cakeShapes);
            $this->cakeShapePrices = array_values($this->cakeShapePrices);

            $this->updateDatabase();
        }
    }

    public function addCakeSize()
    {
        $this->validate([
            'newCakeSize' => 'required',
            'newCakeSizePrice' => 'required|regex:/^\d{1,13}(\.\d{1,2})?$/'
        ]);

        // Check if customCake already exists
        $user_id = auth()->id();
        $checkCakeCustom = ModelsCakeCustom::where('user_id', $user_id)->first();

        if ($checkCakeCustom) {
            // Update the existing entry
            $cakeSizeData = json_decode($checkCakeCustom->cake_size, true);
            $cakeSizePriceData = json_decode($checkCakeCustom->cake_size_price, true);

            array_unshift($cakeSizeData, ['cake_size' => $this->newCakeSize]);
            array_unshift($cakeSizePriceData, ['cake_size_price' => $this->newCakeSizePrice]);

            $checkCakeCustom->cake_size = json_encode($cakeSizeData);
            $checkCakeCustom->cake_size_price = json_encode($cakeSizePriceData);
            $checkCakeCustom->save();
        }

        array_unshift($this->cakeSizes, ['cake_size' => $this->newCakeSize]);
        array_unshift($this->cakeSizePrices, ['cake_size_price' => $this->newCakeSizePrice]);

        // Reset input fields
        $this->newCakeSize = '';
        $this->newCakeSizePrice = '';
    }

    public function deleteCakeSize($index)
    {
        if (isset($this->cakeSizes[$index]) && isset($this->cakeSizePrices[$index])) {
            unset($this->cakeSizes[$index]);
            unset($this->cakeSizePrices[$index]);

            // Re-index the arrays
            $this->cakeSizes = array_values($this->cakeSizes);
            $this->cakeSizePrices = array_values($this->cakeSizePrices);

            $this->updateDatabase();
        }
    }

    public function addCakeLayer()
    {
        $this->validate([
            'newCakeLayer' => 'required',
            'newCakeLayerPrice' => 'required|regex:/^\d{1,13}(\.\d{1,2})?$/'
        ]);

        // Check if customCake already exists
        $user_id = auth()->id();
        $checkCakeCustom = ModelsCakeCustom::where('user_id', $user_id)->first();

        if ($checkCakeCustom) {
            // Update the existing entry
            $cakeLayerData = json_decode($checkCakeCustom->cake_layer, true);
            $cakeLayerPriceData = json_decode($checkCakeCustom->cake_layer_price, true);

            array_unshift($cakeLayerData, ['cake_layer' => $this->newCakeLayer]);
            array_unshift($cakeLayerPriceData, ['cake_layer_price' => $this->newCakeLayerPrice]);

            $checkCakeCustom->cake_layer = json_encode($cakeLayerData);
            $checkCakeCustom->cake_layer_price = json_encode($cakeLayerPriceData);
            $checkCakeCustom->save();
        }

        array_unshift($this->cakeLayers, ['cake_layer' => $this->newCakeLayer]);
        array_unshift($this->cakeLayerPrices, ['cake_layer_price' => $this->newCakeLayerPrice]);

        // Reset input fields
        $this->newCakeLayer = '';
        $this->newCakeLayerPrice = '';
    }

    public function deleteCakeLayer($index)
    {
        if (isset($this->cakeLayers[$index]) && isset($this->cakeLayerPrices[$index])) {
            unset($this->cakeLayers[$index]);
            unset($this->cakeLayerPrices[$index]);

            // Re-index the arrays
            $this->cakeLayers = array_values($this->cakeLayers);
            $this->cakeLayerPrices = array_values($this->cakeLayerPrices);

            $this->updateDatabase();
        }
    }

    public function addCakeDecoration()
    {
        $this->validate([
            'newCakeDecoration' => 'required',
            'newCakeDecorationPrice' => 'required|regex:/^\d{1,13}(\.\d{1,2})?$/',
            'newDecorationImg' => 'required'
        ]);

        // Check if customCake already exists
        $user_id = auth()->id();
        $checkCakeCustom = ModelsCakeCustom::where('user_id', $user_id)->first();

        if ($checkCakeCustom) {
            // Update the existing entry
            $cakeDecorationData = json_decode($checkCakeCustom->cake_decoration, true);
            $cakeDecorationPriceData = json_decode($checkCakeCustom->cake_decoration_price, true);

            array_unshift($cakeDecorationData, ['cake_decoration' => $this->newCakeDecoration]);
            array_unshift($cakeDecorationPriceData, ['cake_decoration_price' => $this->newCakeDecorationPrice]);

            $checkCakeCustom->cake_decoration = json_encode($cakeDecorationData);
            $checkCakeCustom->cake_decoration_price = json_encode($cakeDecorationPriceData);
            $checkCakeCustom->save();
        }

        array_unshift($this->cakeDecorations, ['cake_decoration' => $this->newCakeDecoration]);
        array_unshift($this->cakeDecorationPrices, ['cake_decoration_price' => $this->newCakeDecorationPrice]);

        // Reset input fields
        $this->newCakeDecoration = '';
        $this->newCakeDecorationPrice = '';
    }

    public function deleteCakeDecoration($index)
    {
        if (isset($this->cakeDecorations[$index]) && isset($this->cakeDecorationPrices[$index])) {
            unset($this->cakeDecorations[$index]);
            unset($this->cakeDecorationPrices[$index]);

            // Re-index the arrays
            $this->cakeDecorations = array_values($this->cakeDecorations);
            $this->cakeDecorationPrices = array_values($this->cakeDecorationPrices);

            $this->updateDatabase();
        }
    }

    public function mount()
    {
        $user_id = auth()->id();
        $cakeCustom = ModelsCakeCustom::where('user_id', $user_id)->first();

        if ($cakeCustom) {
            $this->cakeTypes = json_decode($cakeCustom->cake_type, true);
            $this->cakeTypePrices = json_decode($cakeCustom->cake_type_price, true);
            $this->cakeShapes = json_decode($cakeCustom->cake_shape, true);
            $this->cakeShapePrices = json_decode($cakeCustom->cake_shape_price, true);
            $this->cakeSizes = json_decode($cakeCustom->cake_size, true);
            $this->cakeSizePrices = json_decode($cakeCustom->cake_size_price, true);
            $this->cakeLayers = json_decode($cakeCustom->cake_layer, true);
            $this->cakeLayerPrices = json_decode($cakeCustom->cake_layer_price, true);
            $this->cakeDecorations = json_decode($cakeCustom->cake_decoration, true);
            $this->cakeDecorationPrices = json_decode($cakeCustom->cake_decoration_price, true);
        }
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'newCakeType' => 'required',
            'newCakeTypePrice' => 'required|numeric|regex:/^\d{1,13}(\.\d{1,2})?$/',
            'newCakeShape' => 'required',
            'newCakeShapePrice' => 'required|numeric|regex:/^\d{1,13}(\.\d{1,4})?$/',
            'newCakeSize' => 'required',
            'newCakeSizePrice' => 'required|numeric|regex:/^\d{1,13}(\.\d{1,4})?$/',
            'newCakeLayer' => 'required',
            'newCakeLayerPrice' => 'required|numeric|regex:/^\d{1,13}(\.\d{1,4})?$/',
            'newCakeDecoration' => 'required',
            'newCakeDecorationPrice' => 'required|numeric|regex:/^\d{1,13}(\.\d{1,4})?$/',
        ]);
    }

    public function updateDatabase()
    {
        $user_id = auth()->id();
        $cakeCustom = ModelsCakeCustom::where('user_id', $user_id)->first();

        if ($cakeCustom) {
            $cakeCustom->cake_type = json_encode(array_values($this->cakeTypes));
            $cakeCustom->cake_type_price = json_encode(array_values($this->cakeTypePrices));
            $cakeCustom->cake_shape = json_encode(array_values($this->cakeShapes));
            $cakeCustom->cake_shape_price = json_encode(array_values($this->cakeShapePrices));
            $cakeCustom->cake_size = json_encode(array_values($this->cakeSizes));
            $cakeCustom->cake_size_price = json_encode(array_values($this->cakeSizePrices));
            $cakeCustom->cake_layer = json_encode(array_values($this->cakeLayers));
            $cakeCustom->cake_layer_price = json_encode(array_values($this->cakeLayerPrices));
            $cakeCustom->cake_decoration = json_encode(array_values($this->cakeDecorations));
            $cakeCustom->cake_decoration_price = json_encode(array_values($this->cakeDecorationsPrices));
            $cakeCustom->save();
        }
    }

    public function save()
    {
        // if (
        //     empty($this->cakeTypes) || empty($this->cakeTypePrices)
        //     || empty($this->cakeShapes) || empty($this->cakeShapePrices)
        //     || empty($this->cakeSizes) || empty($this->cakeSizePrices)
        //     || empty($this->cakeLayers) || empty($this->cakeLayerPrices)
        //     || empty($this->cakeDecorations) || empty($this->cakeDecorationsPrices)
        // ) {
        //     // If cakeTypes or cakeTypePrices is empty, don't save and show a message
        //     Alert::warning('Warning', 'No data to save.');
        //     return redirect('customize_product');
        // }

        // Check if customCake already exists
        $user_id = auth()->id();
        $checkCakeCustom = ModelsCakeCustom::where('user_id', $user_id)->first();

        if (!$checkCakeCustom) {
            $serializedCakeType = json_encode($this->cakeTypes);
            $serializedCakeTypePrice = json_encode($this->cakeTypePrices);
            $serializedCakeShape = json_encode($this->cakeShapes);
            $serializedCakeShapePrice = json_encode($this->cakeShapePrices);
            $serializedCakeSize = json_encode($this->cakeSizes);
            $serializedCakeSizePrice = json_encode($this->cakeSizePrices);
            $serializedCakeLayer = json_encode($this->cakeLayers);
            $serializedCakeLayerPrice = json_encode($this->cakeLayerPrices);
            $serializedCakeDecoration = json_encode($this->cakeDecorations);
            $serializedCakeDecorationPrice = json_encode($this->cakeDecorationPrices);

            ModelsCakeCustom::create([
                'cake_type' => $serializedCakeType,
                'cake_type_price' => $serializedCakeTypePrice,
                'cake_shape' => $serializedCakeShape,
                'cake_shape_price' => $serializedCakeShapePrice,
                'cake_size' => $serializedCakeSize,
                'cake_size_price' => $serializedCakeSizePrice,
                'cake_layer' => $serializedCakeLayer,
                'cake_layer_price' => $serializedCakeLayerPrice,
                'cake_decoration' => $serializedCakeDecoration,
                'cake_decoration_price' => $serializedCakeDecorationPrice,
                'user_id' => $user_id
            ]);

            Alert::success('Success', 'Cake customization saved!');
        } else {
            Alert::success('Saved', 'Cake customization saved!');
        }

        return redirect('customize_product');
    }

    public function render()
    {
        return view('livewire.cake-custom');
    }
}
