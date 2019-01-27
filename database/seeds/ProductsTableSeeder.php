<?php

use Illuminate\Database\Seeder;
use App\Product;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Iphone X',
            'slug' => 'iphone-x',
            'details' => '64Gb Real Tina',
            'price' => 14999,
            'descriptions' => 'Mỗi số điện thoại chỉ được mua 1 sản phẩm. <br>Không áp dụng khuyến mãi khác, lãi suất 0%-1.29%. <br>Nhắn tin 5.000d xác nhận mua hàng. Nhận sản phẩm trong 48h. <br>Không áp dụng chuyển hàng'
        ]);
        Product::create([
            'name' => 'Iphone Xs',
            'slug' => 'iphone-xs',
            'details' => '646Gb Real Tinaum',
            'price' => 14888,
            'descriptions' => 'Mỗi số điện thoại chỉ được mua 1 sản phẩm. <br>Không áp dụng khuyến mãi khác, lãi suất 0%-1.29%. <br>Nhắn tin 5.000d xác nhận mua hàng. Nhận sản phẩm trong 48h. <br>Không áp dụng chuyển hàng'
        ]);
        Product::create([
            'name' => 'Iphone XG',
            'slug' => 'iphone-xg',
            'details' => '64Gb Real Tina',
            'price' => 12999,
            'descriptions' => 'Mỗi số điện thoại chỉ được mua 1 sản phẩm. <br>Không áp dụng khuyến mãi khác, lãi suất 0%-1.29%. <br>Nhắn tin 5.000d xác nhận mua hàng. Nhận sản phẩm trong 48h. <br>Không áp dụng chuyển hàng'
        ]);
        Product::create([
            'name' => 'Iphone Guard',
            'slug' => 'iphone-guard',
            'details' => '641Gb Real Tinat',
            'price' => 11222,
            'descriptions' => 'Mỗi số điện thoại chỉ được mua 1 sản phẩm. <br>Không áp dụng khuyến mãi khác, lãi suất 0%-1.29%. <br>Nhắn tin 5.000d xác nhận mua hàng. Nhận sản phẩm trong 48h. <br>Không áp dụng chuyển hàng'
        ]);
        Product::create([
            'name' => 'Iphone XA',
            'slug' => 'iphone-xa',
            'details' => '674Gb Real Tina',
            'price' => 12333,
            'descriptions' => 'Mỗi số điện thoại chỉ được mua 1 sản phẩm. <br>Không áp dụng khuyến mãi khác, lãi suất 0%-1.29%. <br>Nhắn tin 5.000d xác nhận mua hàng. Nhận sản phẩm trong 48h. <br>Không áp dụng chuyển hàng'
        ]);
        Product::create([
            'name' => 'Iphone FX',
            'slug' => 'iphone-fx',
            'details' => '604Gb Real Tina',
            'price' => 12222,
            'descriptions' => 'Mỗi số điện thoại chỉ được mua 1 sản phẩm. <br>Không áp dụng khuyến mãi khác, lãi suất 0%-1.29%. <br>Nhắn tin 5.000d xác nhận mua hàng. Nhận sản phẩm trong 48h. <br>Không áp dụng chuyển hàng'
        ]);
        Product::create([
            'name' => 'Iphone FFX',
            'slug' => 'iphone-ffx',
            'details' => '18Gb Real Tina',
            'price' => 12211,
            'descriptions' => 'Mỗi số điện thoại chỉ được mua 1 sản phẩm. <br>Không áp dụng khuyến mãi khác, lãi suất 0%-1.29%. <br>Nhắn tin 5.000d xác nhận mua hàng. Nhận sản phẩm trong 48h. <br>Không áp dụng chuyển hàng'
        ]);
        Product::create([
            'name' => 'Iphone XD',
            'slug' => 'iphone-xd',
            'details' => '14Gb Real Tina',
            'price' => 14229,
            'descriptions' => 'Mỗi số điện thoại chỉ được mua 1 sản phẩm. <br>Không áp dụng khuyến mãi khác, lãi suất 0%-1.29%. <br>Nhắn tin 5.000d xác nhận mua hàng. Nhận sản phẩm trong 48h. <br>Không áp dụng chuyển hàng'
        ]);

    }
}
