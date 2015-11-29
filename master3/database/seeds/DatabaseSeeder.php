<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    	$this->call('CityTableSeeder');
		$this->call('CategoryTableSeeder');
		$this->call('CountryTableSeeder');
		$this->call('OccupationTableSeeder');
		$this->call('RoleTableSeeder');
		$this->call('SubcatLevel1Seeder_C1');
		$this->call('SubcatLevel1Seeder_C2');
		$this->call('SubcatLevel1Seeder_C3');
		$this->call('SubcatLevel1Seeder_C4');
		$this->call('SubcatLevel1Seeder_C5');
		$this->call('SubcatLevel1Seeder_C6');
		$this->call('SubcatLevel1Seeder_C7');
		$this->call('SubcatLevel1Seeder_C8');
		$this->call('SubcatLevel1Seeder_C9');
		$this->call('SubcatLevel1Seeder_C10');
		$this->call('SubcatLevel2Seeder_C10');
		$this->call('StateTableSeeder');
		$this->call('BrandTableSeeder');
		$this->call('DirectorySeeder');
		$this->call('AdslotTableSeeder');
		$this->call('AdslotproductTableSeeder');
		$this->call('CertificateTableSeeder');
		$this->call('DescimageTableSeeder');
		$this->call('TeamTableSeeder');
		$this->call('VBannerTableSeeder');
		$this->call('SignboardTableSeeder');
		$this->call('AlbumTableSeeder');
		$this->call('MerchantCategoryTableSeeder');
		$this->call('ProfileTableSeeder');
		$this->call('ProductKleensoTableSeeder');
		$this->call('ProductTableSeeder1');
		$this->call('ProductTableSeeder2');
//		$this->call('ProductBuildingTableSeeder');
		$this->call('MerchantProductTableSeeder');
		$this->call('LanguageTableSeeder');
		$this->call('CurrencyTableSeeder');
	}
}
