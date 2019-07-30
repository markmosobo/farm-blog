<?php

namespace App\Http\Controllers;

use App\DataTables\LendfarmtoolDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateLendfarmtoolRequest;
use App\Http\Requests\UpdateLendfarmtoolRequest;
use App\Models\Farmtool;
use App\Repositories\LendfarmtoolRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class LendfarmtoolController extends AppBaseController
{
    /** @var  LendfarmtoolRepository */
    private $lendfarmtoolRepository;

    public function __construct(LendfarmtoolRepository $lendfarmtoolRepo)
    {
        $this->lendfarmtoolRepository = $lendfarmtoolRepo;
    }

    /**
     * Display a listing of the Lendfarmtool.
     *
     * @param LendfarmtoolDataTable $lendfarmtoolDataTable
     * @return Response
     */
    public function index(LendfarmtoolDataTable $lendfarmtoolDataTable)
    {
        return $lendfarmtoolDataTable->render('lendfarmtools.index',['tools'=>Farmtool::all()]);
    }

    /**
     * Show the form for creating a new Lendfarmtool.
     *
     * @return Response
     */
    public function create()
    {
        return view('lendfarmtools.create');
    }

    /**
     * Store a newly created Lendfarmtool in storage.
     *
     * @param CreateLendfarmtoolRequest $request
     *
     * @return Response
     */
    public function store(CreateLendfarmtoolRequest $request)
    {
        $input = $request->all();

        $lendfarmtool = $this->lendfarmtoolRepository->create($input);

        Flash::success('Lendfarmtool saved successfully.');

        return redirect(route('lendfarmtools.index'));
    }

    /**
     * Display the specified Lendfarmtool.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lendfarmtool = $this->lendfarmtoolRepository->findWithoutFail($id);

        if (empty($lendfarmtool)) {
            Flash::error('Lendfarmtool not found');

            return redirect(route('lendfarmtools.index'));
        }

        return view('lendfarmtools.show')->with('lendfarmtool', $lendfarmtool);
    }

    /**
     * Show the form for editing the specified Lendfarmtool.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lendfarmtool = $this->lendfarmtoolRepository->findWithoutFail($id);

        if (empty($lendfarmtool)) {
            Flash::error('Lendfarmtool not found');

            return redirect(route('lendfarmtools.index'));
        }

        return view('lendfarmtools.edit')->with('lendfarmtool', $lendfarmtool);
    }

    /**
     * Update the specified Lendfarmtool in storage.
     *
     * @param  int              $id
     * @param UpdateLendfarmtoolRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLendfarmtoolRequest $request)
    {
        $lendfarmtool = $this->lendfarmtoolRepository->findWithoutFail($id);

        if (empty($lendfarmtool)) {
            Flash::error('Lendfarmtool not found');

            return redirect(route('lendfarmtools.index'));
        }

        $lendfarmtool = $this->lendfarmtoolRepository->update($request->all(), $id);

        Flash::success('Lendfarmtool updated successfully.');

        return redirect(route('lendfarmtools.index'));
    }

    /**
     * Remove the specified Lendfarmtool from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lendfarmtool = $this->lendfarmtoolRepository->findWithoutFail($id);

        if (empty($lendfarmtool)) {
            Flash::error('Lendfarmtool not found');

            return redirect(route('lendfarmtools.index'));
        }

        $this->lendfarmtoolRepository->delete($id);

        Flash::success('Lendfarmtool deleted successfully.');

        return redirect(route('lendfarmtools.index'));
    }
}
