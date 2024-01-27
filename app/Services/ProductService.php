<?php

namespace App\Services;

use App\Models\Product;
use App\Traits\FileUpload;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ProductService
{
    use FileUpload;

    public static $product;

    public static function storeProduct($request)
    {
        DB::transaction(function () use ($request) {
            $data = Arr::except($request->validated(), ['thumbnail', 'file']);
            // dd($request->validated('thumbnail'));
            $product = Product::create($data);

            // upload thumbnail image
            $thumbnailPath = "products/{$product->id}/thumbnail/";
            $uploadedThumbnail = self::upload($request->validated('thumbnail'), $thumbnailPath);
            $product->update([
                'thumbnail' => $uploadedThumbnail
            ]);

            // upload document file
            $filePath = "products/{$product->id}/file/";
            $uploadedFile = self::upload($request->validated('file'), $filePath);
            $product->update([
                'file' => $uploadedFile
            ]);

            // dd($path);

            return $product;
        });
    }

    public static function productDetail($id)
    {
        static::$product = Product::find($id);
        return new static;
    }

    public static function deleteProduct()
    {
        DB::transaction(function () {
            static::$product->delete();
        });
    }

    public static function updateProduct($request)
    {
        DB::transaction(function () use ($request) {
            static::$product->update($request->all());
        });
    }

    public static function fetch()
    {
        return static::$product;
    }
}
