<?php

namespace App\Http\Controllers;

use App\DataTables\FarmtoolDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateFarmtoolRequest;
use App\Http\Requests\UpdateFarmtoolRequest;
use App\Repositories\FarmtoolRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class FarmtoolController extends AppBaseController
{
    /** @var  FarmtoolRepository */
    private $farmtoolRepository;

    public function __construct(FarmtoolRepository $farmtoolRepo)
    {
        $this->farmtoolRepository = $farmtoolRepo;
    }

    /**
     * Display a listing of the Farmtool.
     *
     * @param FarmtoolDataTable $farmtoolDataTable
     * @return Response
     */
    public function index(FarmtoolDataTable $farmtoolDataTable)
    {
        return $farmtoolDataTable->render('farmtools.index');
    }

    /**
     * Show the form for creating a new Farmtool.
     *
     * @return Response
     */
    public function create()
    {
        return view('farmtools.create');
    }

    /**
     * Store a newly created Farmtool in storage.
     *
     * @param CreateFarmtoolRequest $request
     *
     * @return Response
     */
    public function store(CreateFarmtoolRequest $request)
    {
        $input = $request->all();

        $farmtool = $this->farmtoolRepository->create($input);

        Flash::success('Farmtool saved successfully.');

        return redirect(route('farmtools.index'));
    }

    /**
     * Display the specified Farmtool.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $farmtool = $this->farmtoolRepository->findWithoutFail($id);

        if (empty($farmtool)) {
            Flash::error('Farmtool not found');

            return redirect(route('farmtools.index'));
        }

        return response()->json($farmtool);
    }

    /**
     * Show the form for editing the specified Farmtool.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $farmtool = $this->farmtoolRepository->findWithoutFail($id);

        if (empty($farmtool)) {
            Flash::error('Farmtool not found');

            return redirect(route('farmtools.index'));
        }

        return view('farmtools.edit')->with('farmtool', $farmtool);
    }

    /**
     * Update the specified Farmtool in storage.
     *
     * @param  int              $id
     * @param UpdateFarmtoolRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFarmtoolRequest $request)
    {
        $farmtool = $this->farmtoolRepository->findWithoutFail($id);

        if (empty($farmtool)) {
            Flash::error('Farmtool not found');

            return redirect(route('farmtools.index'));
        }

        $farmtool = $this->farmtoolRepository->update($request->all(), $id);

        Flash::success('Farmtool updated successfully.');

        return redirect(route('farmtools.index'));
    }

    /**
     * Remove the specified Farmtool from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $farmtool = $this->farmtoolRepository->findWithoutFail($id);

        if (empty($farmtool)) {
            Flash::error('Farmtool not found');

            return redirect(route('farmtools.index'));
        }

        $this->farmtoolRepository->delete($id);

        Flash::success('Farmtool deleted successfully.');

        return redirect(route('farmtools.index'));
    }
}
