<?php

namespace App\Http\Controllers;

use App\DataTables\BorrowedfarmtoolDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBorrowedfarmtoolRequest;
use App\Http\Requests\UpdateBorrowedfarmtoolRequest;
use App\Models\Farmtool;
use App\Repositories\BorrowedfarmtoolRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class BorrowedfarmtoolController extends AppBaseController
{
    /** @var  BorrowedfarmtoolRepository */
    private $borrowedfarmtoolRepository;

    public function __construct(BorrowedfarmtoolRepository $borrowedfarmtoolRepo)
    {
        $this->borrowedfarmtoolRepository = $borrowedfarmtoolRepo;
    }

    /**
     * Display a listing of the Borrowedfarmtool.
     *
     * @param BorrowedfarmtoolDataTable $borrowedfarmtoolDataTable
     * @return Response
     */
    public function index(BorrowedfarmtoolDataTable $borrowedfarmtoolDataTable)
    {
        return $borrowedfarmtoolDataTable->render('borrowedfarmtools.index',['tools'=>Farmtool::all()]);
    }

    /**
     * Show the form for creating a new Borrowedfarmtool.
     *
     * @return Response
     */
    public function create()
    {
        return view('borrowedfarmtools.create');
    }

    /**
     * Store a newly created Borrowedfarmtool in storage.
     *
     * @param CreateBorrowedfarmtoolRequest $request
     *
     * @return Response
     */
    public function store(CreateBorrowedfarmtoolRequest $request)
    {
        $input = $request->all();

        $borrowedfarmtool = $this->borrowedfarmtoolRepository->create($input);

        Flash::success('Borrowedfarmtool saved successfully.');

        return redirect(route('borrowedfarmtools.index'));
    }

    /**
     * Display the specified Borrowedfarmtool.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $borrowedfarmtool = $this->borrowedfarmtoolRepository->findWithoutFail($id);

        if (empty($borrowedfarmtool)) {
            Flash::error('Borrowedfarmtool not found');

            return redirect(route('borrowedfarmtools.index'));
        }

        return view('borrowedfarmtools.show')->with('borrowedfarmtool', $borrowedfarmtool);
    }

    /**
     * Show the form for editing the specified Borrowedfarmtool.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $borrowedfarmtool = $this->borrowedfarmtoolRepository->findWithoutFail($id);

        if (empty($borrowedfarmtool)) {
            Flash::error('Borrowedfarmtool not found');

            return redirect(route('borrowedfarmtools.index'));
        }

        return view('borrowedfarmtools.edit')->with('borrowedfarmtool', $borrowedfarmtool);
    }

    /**
     * Update the specified Borrowedfarmtool in storage.
     *
     * @param  int              $id
     * @param UpdateBorrowedfarmtoolRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBorrowedfarmtoolRequest $request)
    {
        $borrowedfarmtool = $this->borrowedfarmtoolRepository->findWithoutFail($id);

        if (empty($borrowedfarmtool)) {
            Flash::error('Borrowedfarmtool not found');

            return redirect(route('borrowedfarmtools.index'));
        }

        $borrowedfarmtool = $this->borrowedfarmtoolRepository->update($request->all(), $id);

        Flash::success('Borrowedfarmtool updated successfully.');

        return redirect(route('borrowedfarmtools.index'));
    }

    /**
     * Remove the specified Borrowedfarmtool from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $borrowedfarmtool = $this->borrowedfarmtoolRepository->findWithoutFail($id);

        if (empty($borrowedfarmtool)) {
            Flash::error('Borrowedfarmtool not found');

            return redirect(route('borrowedfarmtools.index'));
        }

        $this->borrowedfarmtoolRepository->delete($id);

        Flash::success('Borrowedfarmtool deleted successfully.');

        return redirect(route('borrowedfarmtools.index'));
    }
}
