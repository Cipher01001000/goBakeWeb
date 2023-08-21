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
    public $imageToppers = [];
    public $cakeToppers = [];
    public $cakeTopperPrices = [];

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
    public $newCakeTopper;
    public $newCakeTopperPrice;
    public $newTopperImg;



    // protected $listeners = ['fileUpload' => 'handleFileUpload'];

    // public function handleFileUpload($imageData)
    // {
    //     $this->newDecorationImg = $imageData;
    //     $this->imageDecorations = $imageData;
    // }

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
            'newDecorationImg' => 'required' // Maximum file size 2MB, adjust as needed 'required|image|max:2048'
        ]);

        // Check if customCake already exists
        $user_id = auth()->id();
        $checkCakeCustom = ModelsCakeCustom::where('user_id', $user_id)->first();

        if ($checkCakeCustom) {
            //handle image upload and storage
            $imagePath = $this->storeImage($this->newDecorationImg);

            // Update the existing entry
            $cakeDecorationData = json_decode($checkCakeCustom->cake_decoration, true);
            $cakeDecorationPriceData = json_decode($checkCakeCustom->cake_decoration_price, true);
            $cakeDecorationImageData = json_decode($checkCakeCustom->image_decoration, true);

            array_unshift($cakeDecorationData, ['cake_decoration' => $this->newCakeDecoration]);
            array_unshift($cakeDecorationPriceData, ['cake_decoration_price' => $this->newCakeDecorationPrice]);
            array_unshift($cakeDecorationImageData, ['image_decoration' => $imagePath]);

            $checkCakeCustom->cake_decoration = json_encode($cakeDecorationData);
            $checkCakeCustom->cake_decoration_price = json_encode($cakeDecorationPriceData);
            $checkCakeCustom->image_decoration = json_encode($cakeDecorationImageData);
            $checkCakeCustom->save();
        }

        array_unshift($this->cakeDecorations, ['cake_decoration' => $this->newCakeDecoration]);
        array_unshift($this->cakeDecorationPrices, ['cake_decoration_price' => $this->newCakeDecorationPrice]);
        $this->newDecorationImg = $this->storeImage($this->newDecorationImg);
        array_unshift($this->imageDecorations, ['image_decoration' => $this->newDecorationImg]);

        // Reset input fields
        $this->newCakeDecoration = '';
        $this->newCakeDecorationPrice = '';
        $this->newDecorationImg = null;
    }

    public function deleteCakeDecoration($index)
    {
        if (isset($this->cakeDecorations[$index]) && isset($this->cakeDecorationPrices[$index]) && isset($this->imageDecorations[$index])) {
            unset($this->imageDecorations[$index]);
            unset($this->cakeDecorations[$index]);
            unset($this->cakeDecorationPrices[$index]);

            // Re-index the arrays
            $this->imageDecorations = array_values($this->imageDecorations);
            $this->cakeDecorations = array_values($this->cakeDecorations);
            $this->cakeDecorationPrices = array_values($this->cakeDecorationPrices);

            $this->updateDatabase();
        }
    }

    public function addCakeTopper()
    {
        $this->validate([
            'newCakeTopper' => 'required',
            'newCakeTopperPrice' => 'required|regex:/^\d{1,13}(\.\d{1,2})?$/',
            'newTopperImg' => 'required' // Maximum file size 2MB, adjust as needed 'required|image|max:2048'
        ]);

        // Check if customCake already exists
        $user_id = auth()->id();
        $checkCakeCustom = ModelsCakeCustom::where('user_id', $user_id)->first();

        if ($checkCakeCustom) {
            //handle image upload and storage
            $imagePath = $this->storeImage($this->newTopperImg);

            // Update the existing entry
            $cakeTopperData = json_decode($checkCakeCustom->cake_topper, true);
            $cakeTopperPriceData = json_decode($checkCakeCustom->cake_topper_price, true);
            $cakeTopperImageData = json_decode($checkCakeCustom->image_topper, true);

            array_unshift($cakeTopperData, ['cake_topper' => $this->newCakeTopper]);
            array_unshift($cakeTopperPriceData, ['cake_topper_price' => $this->newCakeTopperPrice]);
            array_unshift($cakeTopperImageData, ['image_topper' => $imagePath]);

            $checkCakeCustom->cake_topper = json_encode($cakeTopperData);
            $checkCakeCustom->cake_topper_price = json_encode($cakeTopperPriceData);
            $checkCakeCustom->image_topper = json_encode($cakeTopperImageData);
            $checkCakeCustom->save();
        }

        array_unshift($this->cakeToppers, ['cake_topper' => $this->newCakeTopper]);
        array_unshift($this->cakeTopperPrices, ['cake_topper_price' => $this->newCakeTopperPrice]);
        $this->newTopperImg = $this->storeImage($this->newTopperImg);
        array_unshift($this->imageToppers, ['image_topper' => $this->newTopperImg]);

        // Reset input fields
        $this->newCakeTopper = '';
        $this->newCakeTopperPrice = '';
        $this->newTopperImg = null;
    }

    public function deleteCakeTopper($index)
    {
        if (isset($this->cakeToppers[$index]) && isset($this->cakeTopperPrices[$index]) && isset($this->imageToppers[$index])) {
            unset($this->imageToppers[$index]);
            unset($this->cakeToppers[$index]);
            unset($this->cakeTopperPrices[$index]);

            // Re-index the arrays
            $this->imageToppers = array_values($this->imageToppers);
            $this->cakeToppers = array_values($this->cakeToppers);
            $this->cakeTopperPrices = array_values($this->cakeTopperPrices);

            $this->updateDatabase();
        }
    }


    private function storeImage($image)
    {
        // Generate a unique filename
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();

        // Store the image in the public storage directory
        $image->storeAs('public/cake-custom-image', $filename);

        // Return the path to the stored image (public directory)
        return 'cake-custom-image/' . $filename;
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
            $this->imageDecorations = json_decode($cakeCustom->image_decoration, true);
            $this->cakeDecorations = json_decode($cakeCustom->cake_decoration, true);
            $this->cakeDecorationPrices = json_decode($cakeCustom->cake_decoration_price, true);
            $this->imageToppers = json_decode($cakeCustom->image_topper, true);
            $this->cakeToppers = json_decode($cakeCustom->cake_topper, true);
            $this->cakeTopperPrices = json_decode($cakeCustom->cake_topper_price, true);
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
            'newCakeTopper' => 'required',
            'newCakeTopperPrice' => 'required|numeric|regex:/^\d{1,13}(\.\d{1,4})?$/',
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
            $cakeCustom->image_decoration = json_encode(array_values($this->imageDecorations));
            $cakeCustom->cake_decoration = json_encode(array_values($this->cakeDecorations));
            $cakeCustom->cake_decoration_price = json_encode(array_values($this->cakeDecorationPrices));
            $cakeCustom->image_topper = json_encode(array_values($this->imageToppers));
            $cakeCustom->cake_topper = json_encode(array_values($this->cakeToppers));
            $cakeCustom->cake_topper_price = json_encode(array_values($this->cakeTopperPrices));
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
            $serializedImageDecoration = json_encode($this->imageDecorations);
            $serializedCakeDecoration = json_encode($this->cakeDecorations);
            $serializedCakeDecorationPrice = json_encode($this->cakeDecorationPrices);
            $serializedImageTopper = json_encode($this->imageToppers);
            $serializedCakeTopper = json_encode($this->cakeToppers);
            $serializedCakeTopperPrice = json_encode($this->cakeTopperPrices);

            ModelsCakeCustom::create([
                'cake_type' => $serializedCakeType,
                'cake_type_price' => $serializedCakeTypePrice,
                'cake_shape' => $serializedCakeShape,
                'cake_shape_price' => $serializedCakeShapePrice,
                'cake_size' => $serializedCakeSize,
                'cake_size_price' => $serializedCakeSizePrice,
                'cake_layer' => $serializedCakeLayer,
                'cake_layer_price' => $serializedCakeLayerPrice,
                'image_decoration' => $serializedImageDecoration,
                'cake_decoration' => $serializedCakeDecoration,
                'cake_decoration_price' => $serializedCakeDecorationPrice,
                'image_topper' => $serializedImageTopper,
                'cake_topper' => $serializedCakeTopper,
                'cake_topper_price' => $serializedCakeTopperPrice,
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
