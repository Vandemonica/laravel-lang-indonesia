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

    'accepted' => 'Kolom :attribute harus diterima.',
    'accepted_if' => 'Kolom :attribute harus diterima jika :other bernilai :value.',
    'active_url' => 'Kolom :attribute harus berupa URL yang valid.',
    'after' => 'Kolom :attribute harus tanggal setelah :date.',
    'after_or_equal' => 'Kolom :attribute harus tanggal setelah atau sama dengan :date.',
    'alpha' => 'Kolom :attribute hanya boleh berisi huruf.',
    'alpha_dash' => 'Kolom :attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => 'Kolom :attribute hanya boleh berisi huruf dan angka.',
    'any_of' => 'Kolom :attribute tidak valid.',
    'array' => 'Kolom :attribute harus berupa array.',
    'ascii' => 'Kolom :attribute hanya boleh berisi karakter alfanumerik dan simbol single-byte.',
    'before' => 'Kolom :attribute harus tanggal sebelum :date.',
    'before_or_equal' => 'Kolom :attribute harus tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => 'Kolom :attribute harus berisi diantara :min sampai :max elemen.',
        'file' => 'Kolom :attribute harus berukuran diantara :min sampai :max kilobyte.',
        'numeric' => 'Kolom :attribute harus diantara :min sampai :max.',
        'string' => 'Kolom :attribute harus diantara :min sampai :max karakter.',
    ],
    'boolean' => 'Kolom :attribute harus bernilai true atau false.',
    'can' => 'Kolom :attribute berisi nilai yang tidak diizinkan.',
    'confirmed' => 'Konfirmasi kolom :attribute tidak cocok.',
    'contains' => 'Kolom :attribute tidak mengandung nilai yang diharuskan.',
    'current_password' => 'Kata sandi salah.',
    'date' => 'Kolom :attribute harus bernilai tanggal yang valid.',
    'date_equals' => 'Kolom :attribute harus tanggal yang sama dengan :date.',
    'date_format' => 'Kolom :attribute harus sesuai dengan format :format.',
    'decimal' => 'Kolom :attribute harus memiliki :decimal nilai tempat desimal.',
    'declined' => 'Kolom :attribute harus ditolak.',
    'declined_if' => 'Kolom :attribute harus ditolak jika :other bernilai :value.',
    'different' => 'Kolom :attribute dan :other harus bernilai beda.',
    'digits' => 'Kolom :attribute harus :digits digit.',
    'digits_between' => 'Kolom :attribute harus :min sampai :max digit.',
    'dimensions' => 'Kolom :attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => 'Kolom :attribute memiliki nilai yang duplikat.',
    'doesnt_end_with' => 'Kolom :attribute tidak boleh diakhiri dengan salah satu dari: :values.',
    'doesnt_start_with' => 'Kolom :attribute tidak boleh diawali dengan salah satu dari: :values.',
    'email' => 'Kolom :attribute harus berupa alamat email yang valid.',
    'ends_with' => 'Kolom :attribute harus diakhiri dengan salah satu dari: :values.',
    'enum' => 'Nilai kolom :attribute yang dipilih tidak valid.',
    'exists' => 'Nilai kolom :attribute yang dipilih tidak valid.',
    'extensions' => 'Kolom :attribute harus memiliki ekstensi sebagai berikut: :values.',
    'file' => 'Kolom :attribute harus berupa file.',
    'filled' => 'Kolom :attribute harus diisi.',
    'gt' => [
        'array' => 'Kolom :attribute harus berisi lebih dari :value elemen.',
        'file' => 'Kolom :attribute harus lebih besar dari :value kilobyte.',
        'numeric' => 'Kolom :attribute harus lebih besar dari :value.',
        'string' => 'Kolom :attribute harus lebih dari :value karakter.',
    ],
    'gte' => [
        'array' => 'Kolom :attribute harus berisi :value elemen atau lebih.',
        'file' => 'Kolom :attribute harus lebih besar dari atau sama dengan :value kilobyte.',
        'numeric' => 'Kolom :attribute harus lebih besar dari atau sama dengan :value.',
        'string' => 'Kolom :attribute harus lebih dari atau sama dengan :value karakter.',
    ],
    'hex_color' => 'Kolom :attribute harus berupa warna heksadesimal yang valid.',
    'image' => 'Kolom :attribute harus berupa gambar.',
    'in' => 'Nilai kolom :attribute yang dipilih tidak valid.',
    'in_array' => 'Kolom :attribute harus ada di :other.',
    'integer' => 'Kolom :attribute harus berupa bilangan bulat.',
    'ip' => 'Kolom :attribute harus berupa alamat IP yang valid.',
    'ipv4' => 'Kolom :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => 'Kolom :attribute harus berupa alamat IPv6 yang valid.',
    'json' => 'Kolom :attribute harus berupa nilai JSON yang valid.',
    'list' => 'Kolom :attribute harus berupa list.',
    'lowercase' => 'Kolom :attribute harus huruf kecil.',
    'lt' => [
        'array' => 'Kolom :attribute harus berisi kurang dari :value elemen.',
        'file' => 'Kolom :attribute harus kurang dari :value kilobyte.',
        'numeric' => 'Kolom :attribute harus kurang dari :value.',
        'string' => 'Kolom :attribute harus kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => 'Kolom :attribute tidak boleh berisi lebih dari :value elemen.',
        'file' => 'Kolom :attribute harus kurang dari atau sama dengan :value kilobyte.',
        'numeric' => 'Kolom :attribute harus kurang dari atau sama dengan :value.',
        'string' => 'Kolom :attribute harus kurang dari atau sama dengan :value karakter.',
    ],
    'mac_address' => 'Kolom :attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'array' => 'Kolom :attribute tidak boleh berisi lebih dari :max elemen.',
        'file' => 'Kolom :attribute tidak boleh lebih besar dari :max kilobyte.',
        'numeric' => 'Kolom :attribute tidak boleh lebih besar dari :max.',
        'string' => 'Kolom :attribute tidak boleh lebih besar dari :max karakter.',
    ],
    'max_digits' => 'Kolom :attribute tidak boleh memiliki lebih dari :max digit.',
    'mimes' => 'Kolom :attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => 'Kolom :attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'array' => 'Kolom :attribute harus berisi setidaknya :min elemen.',
        'file' => 'Kolom :attribute harus berukuran setidaknya :min kilobyte.',
        'numeric' => 'Kolom :attribute harus bernilai setidaknya :min.',
        'string' => 'Kolom :attribute harus bernilai setidaknya :min karakter.',
    ],
    'min_digits' => 'Kolom :attribute harus memiliki setidaknya :min digit.',
    'missing' => 'Kolom :attribute harus kosong.',
    'missing_if' => 'Kolom :attribute harus kosong jika :other bernilai :value.',
    'missing_unless' => 'Kolom :attribute harus kosong kecuali :other bernilai :value.',
    'missing_with' => 'Kolom :attribute harus kosong jika :values ada.',
    'missing_with_all' => 'Kolom :attribute harus kosong jika semua :values ada.',
    'multiple_of' => 'Kolom :attribute harus kelipatan dari :value.',
    'not_in' => 'Nilai kolom :attribute yang dipilih tidak valid.',
    'not_regex' => 'Format kolom :attribute tidak valid.',
    'numeric' => 'Kolom :attribute harus berupa angka.',
    'password' => [
        'letters' => 'Kolom :attribute harus berisi setidaknya satu huruf.',
        'mixed' => 'Kolom :attribute harus berisi setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers' => 'Kolom :attribute harus berisi setidaknya satu angka.',
        'symbols' => 'Kolom :attribute harus berisi setidaknya satu simbol.',
        'uncompromised' => 'Nilai :attribute yang diberikan telah muncul dalam kebocoran data. Silakan pilih :attribute yang berbeda.',
    ],
    'present' => 'Kolom :attribute harus ada.',
    'present_if' => 'Kolom :attribute harus ada jika :other bernilai :value.',
    'present_unless' => 'Kolom :attribute harus ada kecuali :other bernilai :value.',
    'present_with' => 'Kolom :attribute harus ada jika :values ada.',
    'present_with_all' => 'Kolom :attribute harus ada jika semua :values ada.',
    'prohibited' => 'Kolom :attribute dilarang.',
    'prohibited_if' => 'Kolom :attribute dilarang jika :other bernilai :value.',
    'prohibited_if_accepted' => 'Kolom :attribute dilarang jika :other diterima.',
    'prohibited_if_declined' => 'Kolom :attribute dilarang jika :other ditolak.',
    'prohibited_unless' => 'Kolom :attribute dilarang kecuali :other termasuk dari :values.',
    'prohibits' => 'Kolom :attribute melarang :other untuk ada.',
    'regex' => 'Format kolom :attribute tidak valid.',
    'required' => 'Kolom :attribute harus diisi.',
    'required_array_keys' => 'Kolom :attribute harus berisi entri untuk: :values.',
    'required_if' => 'Kolom :attribute harus diisi jika :other bernilai :value.',
    'required_if_accepted' => 'Kolom :attribute harus diisi jika :other diterima.',
    'required_if_declined' => 'Kolom :attribute harus diisi jika :other ditolak.',
    'required_unless' => 'Kolom :attribute harus diisi kecuali :other termasuk dari :values.',
    'required_with' => 'Kolom :attribute harus diisi jika :values ada.',
    'required_with_all' => 'Kolom :attribute harus diisi jika semua :values ada.',
    'required_without' => 'Kolom :attribute harus diisi jika :values tidak ada.',
    'required_without_all' => 'Kolom :attribute harus diisi jika tidak ada satu pun dari :values yang ada.',
    'same' => 'Kolom :attribute dan :other harus sama.',
    'size' => [
        'array' => 'Kolom :attribute harus berisi :size elemen.',
        'file' => 'Kolom :attribute harus berukuran :size kilobyte.',
        'numeric' => 'Kolom :attribute harus bernilai :size.',
        'string' => 'Kolom :attribute harus bernilai :size karakter.',
    ],
    'starts_with' => 'Kolom :attribute harus diawali dengan salah satu dari: :values.',
    'string' => 'Kolom :attribute harus berupa string.',
    'timezone' => 'Kolom :attribute harus berupa zona waktu yang valid.',
    'unique' => 'Kolom :attribute telah digunakan.',
    'uploaded' => 'Kolom :attribute gagal diunggah.',
    'uppercase' => 'Kolom :attribute harus huruf besar.',
    'url' => 'Kolom :attribute harus berupa URL yang valid.',
    'ulid' => 'Kolom :attribute harus berupa ULID yang valid.',
    'uuid' => 'Kolom :attribute harus berupa UUID yang valid.',

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
