<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Kolom :Attribute harus diterima.',
    'accepted_if' => 'Kolom :Attribute harus diterima jika :other bernilai :value.',
    'active_url' => 'Kolom :Attribute harus berupa URL yang valid.',
    'after' => 'Kolom :Attribute harus tanggal setelah :date.',
    'after_or_equal' => 'Kolom :Attribute harus tanggal setelah atau sama dengan :date.',
    'alpha' => 'Kolom :Attribute hanya boleh berisi huruf.',
    'alpha_dash' => 'Kolom :Attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => 'Kolom :Attribute hanya boleh berisi huruf dan angka.',
    'any_of' => 'Kolom :Attribute tidak valid.',
    'array' => 'Kolom :Attribute harus berupa array.',
    'ascii' => 'Kolom :Attribute hanya boleh berisi karakter alfanumerik dan simbol single-byte.',
    'before' => 'Kolom :Attribute harus tanggal sebelum :date.',
    'before_or_equal' => 'Kolom :Attribute harus tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => 'Kolom :Attribute harus berisi :min sampai :max elemen.',
        'file' => 'Kolom :Attribute harus berukuran :min sampai :max kilobyte.',
        'numeric' => 'Kolom :Attribute harus bernilai diantara :min sampai :max.',
        'string' => 'Kolom :Attribute harus bernilai diantara :min sampai :max karakter.',
    ],
    'boolean' => 'Kolom :Attribute harus bernilai true atau false.',
    'can' => 'Kolom :Attribute berisi nilai yang tidak diizinkan.',
    'confirmed' => 'Konfirmasi kolom :Attribute tidak cocok.',
    'contains' => 'Kolom :Attribute tidak mengandung nilai yang diharuskan.',
    'current_password' => 'Kata sandi salah.',
    'date' => 'Kolom :Attribute harus bernilai tanggal yang valid.',
    'date_equals' => 'Kolom :Attribute harus tanggal yang sama dengan :date.',
    'date_format' => 'Kolom :Attribute harus sesuai dengan format :format.',
    'decimal' => 'Kolom :Attribute harus memiliki :decimal nilai tempat desimal.',
    'declined' => 'Kolom :Attribute harus ditolak.',
    'declined_if' => 'Kolom :Attribute harus ditolak jika :other bernilai :value.',
    'different' => 'Kolom :Attribute dan :other harus bernilai beda.',
    'digits' => 'Kolom :Attribute harus :digits digit.',
    'digits_between' => 'Kolom :Attribute harus :min sampai :max digit.',
    'dimensions' => 'Kolom :Attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => 'Kolom :Attribute memiliki nilai yang duplikat.',
    'doesnt_end_with' => 'Kolom :Attribute tidak boleh diakhiri dengan salah satu dari: :values.',
    'doesnt_start_with' => 'Kolom :Attribute tidak boleh diawali dengan salah satu dari: :values.',
    'email' => 'Kolom :Attribute harus berupa alamat email yang valid.',
    'ends_with' => 'Kolom :Attribute harus diakhiri dengan salah satu dari: :values.',
    'enum' => 'Nilai kolom :Attribute yang dipilih tidak valid.',
    'exists' => 'Nilai kolom :Attribute yang dipilih tidak valid.',
    'extensions' => 'Kolom :Attribute harus memiliki ekstensi sebagai berikut: :values.',
    'file' => 'Kolom :Attribute harus berupa file.',
    'filled' => 'Kolom :Attribute harus diisi.',
    'gt' => [
        'array' => 'Kolom :Attribute harus berisi lebih dari :value elemen.',
        'file' => 'Kolom :Attribute harus lebih besar dari :value kilobyte.',
        'numeric' => 'Kolom :Attribute harus lebih besar dari :value.',
        'string' => 'Kolom :Attribute harus lebih dari :value karakter.',
    ],
    'gte' => [
        'array' => 'Kolom :Attribute harus berisi :value elemen atau lebih.',
        'file' => 'Kolom :Attribute harus lebih besar dari atau sama dengan :value kilobyte.',
        'numeric' => 'Kolom :Attribute harus lebih besar dari atau sama dengan :value.',
        'string' => 'Kolom :Attribute harus lebih dari atau sama dengan :value karakter.',
    ],
    'hex_color' => 'Kolom :Attribute harus berupa warna heksadesimal yang valid.',
    'image' => 'Kolom :Attribute harus berupa gambar.',
    'in' => 'Nilai kolom :Attribute yang dipilih tidak valid.',
    'in_array' => 'Kolom :Attribute harus ada di :other.',
    'integer' => 'Kolom :Attribute harus berupa bilangan bulat.',
    'ip' => 'Kolom :Attribute harus berupa alamat IP yang valid.',
    'ipv4' => 'Kolom :Attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => 'Kolom :Attribute harus berupa alamat IPv6 yang valid.',
    'json' => 'Kolom :Attribute harus berupa nilai JSON yang valid.',
    'list' => 'Kolom :Attribute harus berupa list.',
    'lowercase' => 'Kolom :Attribute harus huruf kecil.',
    'lt' => [
        'array' => 'Kolom :Attribute harus berisi kurang dari :value elemen.',
        'file' => 'Kolom :Attribute harus kurang dari :value kilobyte.',
        'numeric' => 'Kolom :Attribute harus kurang dari :value.',
        'string' => 'Kolom :Attribute harus kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => 'Kolom :Attribute tidak boleh berisi lebih dari :value elemen.',
        'file' => 'Kolom :Attribute harus kurang dari atau sama dengan :value kilobyte.',
        'numeric' => 'Kolom :Attribute harus kurang dari atau sama dengan :value.',
        'string' => 'Kolom :Attribute harus kurang dari atau sama dengan :value karakter.',
    ],
    'mac_address' => 'Kolom :Attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'array' => 'Kolom :Attribute tidak boleh berisi lebih dari :max elemen.',
        'file' => 'Kolom :Attribute tidak boleh lebih besar dari :max kilobyte.',
        'numeric' => 'Kolom :Attribute tidak boleh lebih besar dari :max.',
        'string' => 'Kolom :Attribute tidak boleh lebih besar dari :max karakter.',
    ],
    'max_digits' => 'Kolom :Attribute tidak boleh memiliki lebih dari :max digit.',
    'mimes' => 'Kolom :Attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => 'Kolom :Attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'array' => 'Kolom :Attribute harus berisi setidaknya :min elemen.',
        'file' => 'Kolom :Attribute harus berukuran setidaknya :min kilobyte.',
        'numeric' => 'Kolom :Attribute harus bernilai setidaknya :min.',
        'string' => 'Kolom :Attribute harus bernilai setidaknya :min karakter.',
    ],
    'min_digits' => 'Kolom :Attribute harus memiliki setidaknya :min digit.',
    'missing' => 'Kolom :Attribute harus kosong.',
    'missing_if' => 'Kolom :Attribute harus kosong jika :other bernilai :value.',
    'missing_unless' => 'Kolom :Attribute harus kosong kecuali :other bernilai :value.',
    'missing_with' => 'Kolom :Attribute harus kosong jika :values ada.',
    'missing_with_all' => 'Kolom :Attribute harus kosong jika semua :values ada.',
    'multiple_of' => 'Kolom :Attribute harus kelipatan dari :value.',
    'not_in' => 'Nilai kolom :Attribute yang dipilih tidak valid.',
    'not_regex' => 'Format kolom :Attribute tidak valid.',
    'numeric' => 'Kolom :Attribute harus berupa angka.',
    'password' => [
        'letters' => 'Kolom :Attribute harus berisi setidaknya satu huruf.',
        'mixed' => 'Kolom :Attribute harus berisi setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers' => 'Kolom :Attribute harus berisi setidaknya satu angka.',
        'symbols' => 'Kolom :Attribute harus berisi setidaknya satu simbol.',
        'uncompromised' => 'Nilai :Attribute yang diberikan telah muncul dalam kebocoran data. Silakan pilih :Attribute yang berbeda.',
    ],
    'present' => 'Kolom :Attribute harus ada.',
    'present_if' => 'Kolom :Attribute harus ada jika :other bernilai :value.',
    'present_unless' => 'Kolom :Attribute harus ada kecuali :other bernilai :value.',
    'present_with' => 'Kolom :Attribute harus ada jika :values ada.',
    'present_with_all' => 'Kolom :Attribute harus ada jika semua :values ada.',
    'prohibited' => 'Kolom :Attribute dilarang.',
    'prohibited_if' => 'Kolom :Attribute dilarang jika :other bernilai :value.',
    'prohibited_if_accepted' => 'Kolom :Attribute dilarang jika :other diterima.',
    'prohibited_if_declined' => 'Kolom :Attribute dilarang jika :other ditolak.',
    'prohibited_unless' => 'Kolom :Attribute dilarang kecuali :other termasuk dari :values.',
    'prohibits' => 'Kolom :Attribute melarang :other untuk ada.',
    'regex' => 'Format kolom :Attribute tidak valid.',
    'required' => 'Kolom :Attribute harus diisi.',
    'required_array_keys' => 'Kolom :Attribute harus berisi entri untuk: :values.',
    'required_if' => 'Kolom :Attribute harus diisi jika :other bernilai :value.',
    'required_if_accepted' => 'Kolom :Attribute harus diisi jika :other diterima.',
    'required_if_declined' => 'Kolom :Attribute harus diisi jika :other ditolak.',
    'required_unless' => 'Kolom :Attribute harus diisi kecuali :other termasuk dari :values.',
    'required_with' => 'Kolom :Attribute harus diisi jika :values ada.',
    'required_with_all' => 'Kolom :Attribute harus diisi jika semua :values ada.',
    'required_without' => 'Kolom :Attribute harus diisi jika :values tidak ada.',
    'required_without_all' => 'Kolom :Attribute harus diisi jika tidak ada satu pun dari :values yang ada.',
    'same' => 'Kolom :Attribute dan :other harus sama.',
    'size' => [
        'array' => 'Kolom :Attribute harus berisi :size elemen.',
        'file' => 'Kolom :Attribute harus berukuran :size kilobyte.',
        'numeric' => 'Kolom :Attribute harus bernilai :size.',
        'string' => 'Kolom :Attribute harus bernilai :size karakter.',
    ],
    'starts_with' => 'Kolom :Attribute harus diawali dengan salah satu dari: :values.',
    'string' => 'Kolom :Attribute harus berupa string.',
    'timezone' => 'Kolom :Attribute harus berupa zona waktu yang valid.',
    'unique' => 'Kolom :Attribute telah digunakan.',
    'uploaded' => 'Kolom :Attribute gagal diunggah.',
    'uppercase' => 'Kolom :Attribute harus huruf besar.',
    'url' => 'Kolom :Attribute harus berupa URL yang valid.',
    'ulid' => 'Kolom :Attribute harus berupa ULID yang valid.',
    'uuid' => 'Kolom :Attribute harus berupa UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
