<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Bulk_upload;
use App\Models\Contact;
use App\Models\user;
use App\Models\Beneficiary;
use App\Models\Transaction;
use Illuminate\Validation\Rules\Unique;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithFailures;
use Maatwebsite\Excel\Validators\ValidationException;
use Auth;

class ExcelImport implements ToCollection, WithHeadingRow, WithValidation
{
    /**
     * @param Collection $collection
     */

    use Importable;

    protected $batch_name;
    protected $virtual_account;
    protected $get_contact_id;


    function __construct($batch_name, $virtual_account, $get_contact_id)
    {
        $this->batch_name = $batch_name;
        $this->virtual_account = $virtual_account;
        $this->get_contact_id = $get_contact_id;
    }

    public function collection($rows)
    {
        $user = Auth::user()->id;
        $get_user = User::where('id', $user)->first();

        //create contact 

        foreach ($rows as $row) {

            $upi_get = isset($row['upi_handle']) ? $row['upi_handle'] : '';
            $unique_req_number = isset($row['unique_request_number']) ? $row['unique_request_number'] : '';
            $beneficiary_name = isset($row['beneficiary_name']) ? $row['beneficiary_name'] : '';
            $description = isset($row['description']) ? $row['description'] : '';
            $shedule_for_later = isset($row['scheduled_for']) ? $row['scheduled_for'] : '';
            $amount = isset($row['amount']) ? $row['amount'] : '';
            $beneficiary_email = isset($row['beneficiary_email_id']) ? $row['beneficiary_email_id'] : '';
            $account_number = isset($row['account_number']) ? $row['account_number'] : '';
            $ifsc = isset($row['ifsc_code']) ? $row['ifsc_code'] : '';
            if (!empty($upi_get)) {
                $beneficiary_type = 'upi';
            } else {
                $beneficiary_type = 'ac';
            }

            // $totalRows = $rows->count();
            if (!empty($beneficiary_name)) {

                $create_benficiary = new Beneficiary([
                    'user_id' => $user,
                    'contact_id' => $this->get_contact_id,
                    'account_number' => $account_number,
                    'ifsc' => $ifsc,
                    'beneficiary_name' => $beneficiary_name,
                    'beneficiary_type' => $beneficiary_type,
                    'upi_id' =>  $upi_get,
                    'beneficiary_email' => $beneficiary_email,

                ]);
                $create_benficiary->save();

                if ($create_benficiary) {

                    $create_transaction = new Transaction([
                        'user_id' => $user,
                        'transaction_number' => uniqid(),
                        'unique_request_number' => $unique_req_number,
                        'source_virtual_account' => $this->virtual_account,
                        'beneficiary_name' => $beneficiary_name,
                        'amount' => $amount,
                        'payment_method' => $beneficiary_type,
                        'description' => $description,
                        'shedule_for_later' => $shedule_for_later,
                        'contact_id' => $this->get_contact_id,
                        'Benficiary_id' => $create_benficiary->id,
                        'transaction_status' => "Success",
                        'payment_type' => 'debit',
                        'trasaction_date' => date('Y-m-d H:i:s'),
                        'payment_mode' => 'IMPS',
                        'created_at' =>  date('Y-m-d H:i:s'),
                        'updated_at' =>  date('Y-m-d H:i:s'),

                    ]);

                    $create_transaction->save();
                }
            }
        }

        return redirect()->route('transaction.list')
            ->with('success', 'Transaction initiated successfully');
    }

    public function rules(): array
    {
        return [
            '1' => 'required', 'email',
            '2' => ['required', 'min:5'],
            '3' => ['required', 'min:5'],
            '4' => ['nullable', 'numeric'],
            '5' => 'required',
            '6' => 'required',
            '7' => 'required',
            '8' => ['nullable', 'email'],
            '9' => 'required',

        ];
    }

    // public function validationMessages()
    // {
    //     return [
    //         '0.required' => trans('user.first_name_is_required'),
    //         '1.required' => trans('user.last_name_is_required'),
    //         '2.required' => trans('user.email_is_required'),
    //         '2.unique' => trans('user.email_must_be_unique'),
    //         '2.email' => trans('user.email_must_be_valid'),
    //     ];
    // }

    public function onFailure(Failure ...$failures)
    {
        foreach ($failures as $failure) {
            $row = $failure->row();
            $errors = $failure->errors();
            // handle validation errors here
        }
    }
}
