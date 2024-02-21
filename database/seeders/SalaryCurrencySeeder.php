<?php

namespace Database\Seeders;

use App\Models\SalaryCurrency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalaryCurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $salaryCurrencies = [
            [
                'currency_name' => 'USD US Dollar',
                'currency_icon' => '$',
                'currency_code' => 'USD',
                'status' => 1,
            ],
            [
                'currency_name' => 'EUR Euro',
                'currency_icon' => '€',
                'currency_code' => 'EUR',
                'status' => 1,
            ],
            [
                'currency_name' => 'HKD Hong Kong Dollar',
                'currency_icon' => '$',
                'currency_code' => 'HKD',
                'status' => 1,
            ],
            [
                'currency_name' => 'INR Indian Rupee',
                'currency_icon' => '₹',
                'currency_code' => 'INR',
                'status' => 1,
            ],
            [
                'currency_name' => 'AUD Australian Dollar',
                'currency_icon' => '$',
                'currency_code' => 'AUD',
                'status' => 1,
            ],
            [
                'currency_name' => 'JMD Jamaican Dollar',
                'currency_icon' => 'J$',
                'currency_code' => 'JMD',
                'status' => 1,
            ],
            [
                'currency_name' => 'CAD Canadian Dollar',
                'currency_icon' => '$',
                'currency_code' => 'CAD',
                'status' => 1,
            ],
            [
                'currency_name' => 'AED United Arab Emirates Dirham',
                'currency_icon' => 'د.إ',
                'currency_code' => 'AED',
                'status' => 1,
            ],
            [
                'currency_name' => 'AFN Afghanistan Afghani',
                'currency_icon' => '؋',
                'currency_code' => 'AFN',
                'status' => 1,
            ],
            [
                'currency_name' => 'ALL Albania Lek',
                'currency_icon' => 'Lek',
                'currency_code' => 'ALL',
                'status' => 1,
            ],
            [
                'currency_name' => 'AMD Armenian Dram',
                'currency_icon' => '֏',
                'currency_code' => 'AMD',
                'status' => 1,
            ],
            [
                'currency_name' => 'ANG Netherlands Antilles Guilder',
                'currency_icon' => 'ƒ',
                'currency_code' => 'ANG',
                'status' => 1,
            ],
            [
                'currency_name' => 'AOA Angola kwanza',
                'currency_icon' => 'Kz',
                'currency_code' => 'AOA',
                'status' => 1,
            ],
            [
                'currency_name' => 'ARS Argentina Peso',
                'currency_icon' => '$',
                'currency_code' => 'ARS',
                'status' => 1,
            ],
            [
                'currency_name' => 'AWG Aruba Guilder',
                'currency_icon' => 'ƒ',
                'currency_code' => 'AWG',
                'status' => 1,
            ],
            [
                'currency_name' => 'AZN Azerbaijan Manat',
                'currency_icon' => '₼',
                'currency_code' => 'AZN',
                'status' => 1,
            ],
            [
                'currency_name' => 'BAM Bosnia and Herzegovina Convertible Marka',
                'currency_icon' => 'KM',
                'currency_code' => 'BAM',
                'status' => 1,
            ],
            [
                'currency_name' => 'BBD Barbados Dollar',
                'currency_icon' => '$',
                'currency_code' => 'BBD',
                'status' => 1,
            ],
            [
                'currency_name' => 'BDT Bangladesh Taka',
                'currency_icon' => '৳',
                'currency_code' => 'BDT',
                'status' => 1,
            ],
            [
                'currency_name' => 'BGN Bulgaria Lev',
                'currency_icon' => 'лв',
                'currency_code' => 'BGN',
                'status' => 1,
            ],
            [
                'currency_name' => 'BMD Bermuda Dollar',
                'currency_icon' => '$',
                'currency_code' => 'BMD',
                'status' => 1,
            ],
            [
                'currency_name' => 'BND Brunei Darussalam Dollar',
                'currency_icon' => '$',
                'currency_code' => 'BND',
                'status' => 1,
            ],
            [
                'currency_name' => 'BOB Bolivia Boliviano',
                'currency_icon' => '$b',
                'currency_code' => 'BOB',
                'status' => 1,
            ],
            [
                'currency_name' => 'BRL Brazil Real',
                'currency_icon' => 'R$',
                'currency_code' => 'BRL',
                'status' => 1,
            ],
            [
                'currency_name' => 'BSD Bahamas Dollar',
                'currency_icon' => '$',
                'currency_code' => 'BSD',
                'status' => 1,
            ],
            [
                'currency_name' => 'BWP Botswana Pula',
                'currency_icon' => 'P',
                'currency_code' => 'BWP',
                'status' => 1,
            ],
            [
                'currency_name' => 'BZD Belize Dollar',
                'currency_icon' => 'BZ$',
                'currency_code' => 'BZD',
                'status' => 1,
            ],
            [
                'currency_name' => 'CDF Congo Congolese franc',
                'currency_icon' => 'FC',
                'currency_code' => 'CDF',
                'status' => 1,
            ],
            [
                'currency_name' => 'CHF Switzerland Franc',
                'currency_icon' => 'CHF',
                'currency_code' => 'CHF',
                'status' => 1,
            ],
            [
                'currency_name' => 'CNY China Yuan Renminbi',
                'currency_icon' => '¥',
                'currency_code' => 'CNY',
                'status' => 1,
            ],
            [
                'currency_name' => 'COP Colombia Peso',
                'currency_icon' => '$',
                'currency_code' => 'COP',
                'status' => 1,
            ],
            [
                'currency_name' => 'CRC Costa Rica Colon',
                'currency_icon' => '₡',
                'currency_code' => 'CRC',
                'status' => 1,
            ],
            [
                'currency_name' => 'CVE Cape Verde Escudo',
                'currency_icon' => '$',
                'currency_code' => 'CVE',
                'status' => 1,
            ],
            [
                'currency_name' => 'CZK Czech Republic Koruna',
                'currency_icon' => 'Kč',
                'currency_code' => 'CZK',
                'status' => 1,
            ],
            [
                'currency_name' => 'DKK Denmark Krone',
                'currency_icon' => 'kr',
                'currency_code' => 'DKK',
                'status' => 1,
            ],
            [
                'currency_name' => 'DOP Dominican Republic Peso',
                'currency_icon' => 'RD$',
                'currency_code' => 'DOP',
                'status' => 1,
            ],
            [
                'currency_name' => 'DZD Algeria Dinar',
                'currency_icon' => 'دج',
                'currency_code' => 'DZD',
                'status' => 1,
            ],
            [
                'currency_name' => 'EGP Egypt Pound',
                'currency_icon' => '£',
                'currency_code' => 'EGP',
                'status' => 1,
            ],
            [
                'currency_name' => 'ETB Ethiopia Birr',
                'currency_icon' => 'ብር',
                'currency_code' => 'ETB',
                'status' => 1,
            ],
            [
                'currency_name' => 'FJD Fiji Dollar',
                'currency_icon' => '$',
                'currency_code' => 'FJD',
                'status' => 1,
            ],
            [
                'currency_name' => 'FKP Falkland Islands Pound',
                'currency_icon' => '£',
                'currency_code' => 'FKP',
                'status' => 1,
            ],
            [
                'currency_name' => 'GBP United Kingdom Pound',
                'currency_icon' => '£',
                'currency_code' => 'GBP',
                'status' => 1,
            ],
            [
                'currency_name' => 'GEL Georgia Lari',
                'currency_icon' => '₾',
                'currency_code' => 'GEL',
                'status' => 1,
            ],
            [
                'currency_name' => 'GIP Gibraltar Pound',
                'currency_icon' => '£',
                'currency_code' => 'GIP',
                'status' => 1,
            ],
            [
                'currency_name' => 'GMD Gambia Dalasi',
                'currency_icon' => 'D',
                'currency_code' => 'GMD',
                'status' => 1,
            ],
            [
                'currency_name' => 'GTQ Guatemala Quetzal',
                'currency_icon' => 'Q',
                'currency_code' => 'GTQ',
                'status' => 1,
            ],
            [
                'currency_name' => 'GYD Guyana Dollar',
                'currency_icon' => '$',
                'currency_code' => 'GYD',
                'status' => 1,
            ],
            [
                'currency_name' => 'HNL Honduras Lempira',
                'currency_icon' => 'L',
                'currency_code' => 'HNL',
                'status' => 1,
            ],
            [
                'currency_name' => 'HRK Croatia Kuna',
                'currency_icon' => 'kn',
                'currency_code' => 'HRK',
                'status' => 1,
            ],
            [
                'currency_name' => 'HTG Haiti Gourde',
                'currency_icon' => 'G',
                'currency_code' => 'HTG',
                'status' => 1,
            ],
            [
                'currency_name' => 'HUF Hungary Forint',
                'currency_icon' => 'Ft',
                'currency_code' => 'HUF',
                'status' => 1,
            ],
            [
                'currency_name' => 'IDR Indonesia Rupiah',
                'currency_icon' => 'Rp',
                'currency_code' => 'IDR',
                'status' => 1,
            ],
            [
                'currency_name' => 'ILS Israel Shekel',
                'currency_icon' => '₪',
                'currency_code' => 'ILS',
                'status' => 1,
            ],
            [
                'currency_name' => 'ISK Iceland Krona',
                'currency_icon' => 'kr',
                'currency_code' => 'ISK',
                'status' => 1,
            ],
            [
                'currency_name' => 'KES Kenya Shilling',
                'currency_icon' => '/=',
                'currency_code' => 'KES',
                'status' => 1,
            ],
            [
                'currency_name' => 'KGS Kyrgyzstan Som',
                'currency_icon' => 'лв',
                'currency_code' => 'KGS',
                'status' => 1,
            ],
            [
                'currency_name' => 'KHR Cambodia Riel',
                'currency_icon' => '៛',
                'currency_code' => 'KHR',
                'status' => 1,
            ],
            [
                'currency_name' => 'KYD Cayman Dollar',
                'currency_icon' => '$',
                'currency_code' => 'KYD',
                'status' => 1,
            ],
            [
                'currency_name' => 'KZT Kazakhstan Tenge',
                'currency_icon' => 'лв',
                'currency_code' => 'KZT',
                'status' => 1,
            ],
            [
                'currency_name' => 'LAK Laos Kip',
                'currency_icon' => '₭',
                'currency_code' => 'LAK',
                'status' => 1,
            ],
            [
                'currency_name' => 'LBP Lebanon Pound',
                'currency_icon' => '£',
                'currency_code' => 'LBP',
                'status' => 1,
            ],
            [
                'currency_name' => 'LKR Sri Lanka Rupee',
                'currency_icon' => '₨',
                'currency_code' => 'LKR',
                'status' => 1,
            ],
            [
                'currency_name' => 'LRD Liberia Dollar',
                'currency_icon' => '$',
                'currency_code' => 'LRD',
                'status' => 1,
            ],
            [
                'currency_name' => 'LSL Lesotho Loti',
                'currency_icon' => 'L',
                'currency_code' => 'LSL',
                'status' => 1,
            ],
            [
                'currency_name' => 'MAD Morocco Dirham',
                'currency_icon' => 'MAD',
                'currency_code' => 'MAD',
                'status' => 1,
            ],
            [
                'currency_name' => 'MDL Moldova Leu',
                'currency_icon' => 'L',
                'currency_code' => 'MDL',
                'status' => 1,
            ],
            [
                'currency_name' => 'MKD Macedonia Denar',
                'currency_icon' => 'ден',
                'currency_code' => 'MKD',
                'status' => 1,
            ],
            [
                'currency_name' => 'MMK Myanmar Kyat',
                'currency_icon' => 'K',
                'currency_code' => 'MMK',
                'status' => 1,
            ],
            [
                'currency_name' => 'MNT Mongolia Tughrik',
                'currency_icon' => '₮',
                'currency_code' => 'MNT',
                'status' => 1,
            ],
            [
                'currency_name' => 'MOP Macau P ataca',
                'currency_icon' => 'MOP$',
                'currency_code' => 'MOP',
                'status' => 1,
            ],
            [
                'currency_name' => 'MRO Mauritania Ouguiya',
                'currency_icon' => 'MRU',
                'currency_code' => 'MRO',
                'status' => 1,
            ],
            [
                'currency_name' => 'MUR Mauritius Rupee',
                'currency_icon' => '₨',
                'currency_code' => 'MUR',
                'status' => 1,
            ],
            [
                'currency_name' => 'MVR Maldives Rufiyaa',
                'currency_icon' => '.ރ',
                'currency_code' => 'MVR',
                'status' => 1,
            ],
            [
                'currency_name' => 'MWK Malawi Kwacha',
                'currency_icon' => 'MK',
                'currency_code' => 'MWK',
                'status' => 1,
            ],
            [
                'currency_name' => 'MXN Mexico Peso',
                'currency_icon' => '$',
                'currency_code' => 'MXN',
                'status' => 1,
            ],
            [
                'currency_name' => 'MYR Malaysia Ringgit',
                'currency_icon' => 'RM',
                'currency_code' => 'MYR',
                'status' => 1,
            ],
            [
                'currency_name' => 'MZN Mozambique Metical',
                'currency_icon' => 'MT',
                'currency_code' => 'MZN',
                'status' => 1,
            ],
            [
                'currency_name' => 'NAD Namibia Dollar',
                'currency_icon' => '$',
                'currency_code' => 'NAD',
                'status' => 1,
            ],
            [
                'currency_name' => 'NGN Nigeria Naira',
                'currency_icon' => '₦',
                'currency_code' => 'NGN',
                'status' => 1,
            ],
            [
                'currency_name' => 'NIO Nicaragua Cordoba',
                'currency_icon' => 'C$',
                'currency_code' => 'NIO',
                'status' => 1,
            ],
            [
                'currency_name' => 'NOK Norway Krone',
                'currency_icon' => 'kr',
                'currency_code' => 'NOK',
                'status' => 1,
            ],
            [
                'currency_name' => 'NPR Nepal Rupee',
                'currency_icon' => '₨',
                'currency_code' => 'NPR',
                'status' => 1,
            ],
            [
                'currency_name' => 'NZD New Zealand Dollar',
                'currency_icon' => '$',
                'currency_code' => 'NZD',
                'status' => 1,
            ],
            [
                'currency_name' => 'PAB Panama Balboa',
                'currency_icon' => 'B/.',
                'currency_code' => 'PAB',
                'status' => 1,
            ],
            [
                'currency_name' => 'PEN Peru Nuevo Sol',
                'currency_icon' => 'S/.',
                'currency_code' => 'PEN',
                'status' => 1,
            ],
            [
                'currency_name' => 'PGK Papua New Guinea Kina',
                'currency_icon' => 'K',
                'currency_code' => 'PGK',
                'status' => 1,
            ],
            [
                'currency_name' => 'PHP Philippines Peso',
                'currency_icon' => '₱',
                'currency_code' => 'PHP',
                'status' => 1,
            ],
            [
                'currency_name' => 'PKR Pakistan Rupee',
                'currency_icon' => '₨',
                'currency_code' => 'PKR',
                'status' => 1,
            ],
            [
                'currency_name' => 'PLN Poland Zloty',
                'currency_icon' => 'zł',
                'currency_code' => 'PLN',
                'status' => 1,
            ],
            [
                'currency_name' => 'QAR Qatar Riyal',
                'currency_icon' => '﷼',
                'currency_code' => 'QAR',
                'status' => 1,
            ],
            [
                'currency_name' => 'RON Romania New Leu',
                'currency_icon' => 'lei',
                'currency_code' => 'RON',
                'status' => 1,
            ],
            [
                'currency_name' => 'RSD Serbia Dinar',
                'currency_icon' => 'Дин.',
                'currency_code' => 'RSD',
                'status' => 1,
            ],
            [
                'currency_name' => 'RUB Russia Ruble',
                'currency_icon' => '₽',
                'currency_code' => 'RUB',
                'status' => 1,
            ],
            [
                'currency_name' => 'SAR Saudi Arabia Riyal',
                'currency_icon' => '﷼',
                'currency_code' => 'SAR',
                'status' => 1,
            ],
            [
                'currency_name' => 'SBD Solomon Islands Dollar',
                'currency_icon' => '$',
                'currency_code' => 'SBD',
                'status' => 1,
            ],
            [
                'currency_name' => 'SCR Seychelles Rupee',
                'currency_icon' => '₨',
                'currency_code' => 'SCR',
                'status' => 1,
            ],
            [
                'currency_name' => 'SEK Sweden Krona',
                'currency_icon' => 'kr',
                'currency_code' => 'SEK',
                'status' => 1,
            ],
            [
                'currency_name' => 'SGD Singapore Dollar',
                'currency_icon' => '$',
                'currency_code' => 'SGD',
                'status' => 1,
            ],
            [
                'currency_name' => 'SHP Saint Helena Pound',
                'currency_icon' => '£',
                'currency_code' => 'SHP',
                'status' => 1,
            ],
            [
                'currency_name' => 'SLL Sierra Leone Leone',
                'currency_icon' => 'Le',
                'currency_code' => 'SLL',
                'status' => 1,
            ],
            [
                'currency_name' => 'SOS Somalia Shilling',
                'currency_icon' => 'S',
                'currency_code' => 'SOS',
                'status' => 1,
            ],
            [
                'currency_name' => 'SRD Suriname Dollar',
                'currency_icon' => '$',
                'currency_code' => 'SRD',
                'status' => 1,
            ],
            [
                'currency_name' => 'STD São Tomé and Príncipe Dobra',
                'currency_icon' => 'Db',
                'currency_code' => 'STD',
                'status' => 1,
            ],
            [
                'currency_name' => 'SZL Eswatini lilangeni',
                'currency_icon' => 'L',
                'currency_code' => 'SZL',
                'status' => 1,
            ],
            [
                'currency_name' => 'THB Thailand Baht',
                'currency_icon' => '฿',
                'currency_code' => 'THB',
                'status' => 1,
            ],
            [
                'currency_name' => 'TJS Tajikistan Somoni',
                'currency_icon' => 'ЅM',
                'currency_code' => 'TJS',
                'status' => 1,
            ],
            [
                'currency_name' => 'TOP Tonga Pa’anga',
                'currency_icon' => 'T$',
                'currency_code' => 'TOP',
                'status' => 1,
            ],
            [
                'currency_name' => 'TRY Turkey Lira',
                'currency_icon' => '₺',
                'currency_code' => 'TRY',
                'status' => 1,
            ],
            [
                'currency_name' => 'TTD Trinidad and Tobago Dollar',
                'currency_icon' => 'TT$',
                'currency_code' => 'TTD',
                'status' => 1,
            ],
            [
                'currency_name' => 'TWD Taiwan New Dollar',
                'currency_icon' => 'NT$',
                'currency_code' => 'TWD',
                'status' => 1,
            ],
            [
                'currency_name' => 'TZS Tanzania Shiling',
                'currency_icon' => 'TSh',
                'currency_code' => 'TZS',
                'status' => 1,
            ],
            [
                'currency_name' => 'UAH Ukraine Hryvna',
                'currency_icon' => '₴',
                'currency_code' => 'UAH',
                'status' => 1,
            ],
            [
                'currency_name' => 'UYU Uruguay Peso',
                'currency_icon' => '$U',
                'currency_code' => 'UYU',
                'status' => 1,
            ],
            [
                'currency_name' => 'UZS Uzbekistan Som',
                'currency_icon' => 'лв',
                'currency_code' => 'UZS',
                'status' => 1,
            ],
            [
                'currency_name' => 'WST Samoa  Tālā',
                'currency_icon' => 'WS$',
                'currency_code' => 'WST',
                'status' => 1,
            ],
            [
                'currency_name' => 'XCD Eastern Caribbean States Dollar',
                'currency_icon' => '$',
                'currency_code' => 'XCD',
                'status' => 1,
            ],
            [
                'currency_name' => 'YER Yemen Rial',
                'currency_icon' => '﷼',
                'currency_code' => 'YER',
                'status' => 1,
            ],
            [
                'currency_name' => 'ZAR South Africa Rand',
                'currency_icon' => 'R',
                'currency_code' => 'ZAR',
                'status' => 1,
            ],
            [
                'currency_name' => 'ZMW Zambia Kwacha',
                'currency_icon' => 'ZK',
                'currency_code' => 'ZMW',
                'status' => 1,
            ],
            //Zero Decimal Currencies
            [
                'currency_name' => 'BIF Burundi Franc',
                'currency_icon' => 'FBu',
                'currency_code' => 'BIF',
                'status' => 1,
            ],
            [
                'currency_name' => 'CLP Chile Peso',
                'currency_icon' => '$',
                'currency_code' => 'CLP',
                'status' => 1,
            ],
            [
                'currency_name' => 'DJF Djibouti Franc',
                'currency_icon' => 'Fdj',
                'currency_code' => 'DJF',
                'status' => 1,
            ],
            [
                'currency_name' => 'GNF Guinea Franc',
                'currency_icon' => 'GFr',
                'currency_code' => 'GNF',
                'status' => 1,
            ],
            [
                'currency_name' => 'JPY Japan Yen',
                'currency_icon' => '¥',
                'currency_code' => 'JPY',
                'status' => 1,
            ],
            [
                'currency_name' => 'KMF Comoros Franc',
                'currency_icon' => 'CF',
                'currency_code' => 'KMF',
                'status' => 1,
            ],
            [
                'currency_name' => 'KRW Korea Won',
                'currency_icon' => '₩',
                'currency_code' => 'KRW',
                'status' => 1,
            ],
            [
                'currency_name' => 'MGA Madagascar Ariary ',
                'currency_icon' => 'Ar',
                'currency_code' => 'MGA',
                'status' => 1,
            ],
            [
                'currency_name' => 'PYG Paraguay Guarani',
                'currency_icon' => 'Gs',
                'currency_code' => 'PYG',
                'status' => 1,
            ],
            [
                'currency_name' => 'RWF Rwanda Franc',
                'currency_icon' => 'R₣',
                'currency_code' => 'RWF',
                'status' => 1,
            ],
            [
                'currency_name' => 'UGX Uganda Shilling',
                'currency_icon' => 'USh',
                'currency_code' => 'UGX',
                'status' => 1,
            ],
            [
                'currency_name' => 'VND Viet Nam Dong',
                'currency_icon' => '₫',
                'currency_code' => 'VND',
                'status' => 1,
            ],
            [
                'currency_name' => 'VUV Vanuatu Vatu',
                'currency_icon' => 'VT',
                'currency_code' => 'VUV',
                'status' => 1,
            ],
            [
                'currency_name' => 'XAF Central Africa Central African CFA Franc',
                'currency_icon' => 'FCFA',
                'currency_code' => 'XAF',
                'status' => 1,
            ],
            [
                'currency_name' => 'XOF West Africa West African CFA Franc',
                'currency_icon' => 'CFA',
                'currency_code' => 'XOF',
                'status' => 1,
            ],
            [
                'currency_name' => 'XPF France Franc',
                'currency_icon' => '₣',
                'currency_code' => 'XPF',
                'status' => 1,
            ],
        ];
        foreach($salaryCurrencies as $salaryCurrency){
            SalaryCurrency::create($salaryCurrency);
        }
    }
}