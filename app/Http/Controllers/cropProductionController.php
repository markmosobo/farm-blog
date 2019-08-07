<?php

namespace App\Http\Controllers;

use App\DataTables\cropProductionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatecropProductionRequest;
use App\Http\Requests\UpdatecropProductionRequest;
use App\Models\Crop;
use App\Repositories\cropProductionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class cropProductionController extends AppBaseController
{
    /** @var  cropProductionRepository */
    private $cropProductionRepository;

    public function __construct(cropProductionRepository $cropProductionRepo)
    {
        $this->cropProductionRepository = $cropProductionRepo;
    }

    /**
     * Display a listing of the cropProduction.
     *
     * @param cropProductionDataTable $cropProductionDataTable
     * @return Response
     */
    public function index(cropProductionDataTable $cropProductionDataTable)
    {
        return $cropProductionDataTable->render('crop_productions.index',['crops'=>Crop::all()]);
    }

    /**
     * Show the form for creating a new cropProduction.
     *
     * @return Response
     */
    public function create()
    {
        return view('crop_productions.create');
    }

    /**
     * Store a newly created cropProduction in storage.
     *
     * @param CreatecropProductionRequest $request
     *
     * @return Response
     */
    public function store(CreatecropProductionRequest $request)
    {
        $input = $request->all();

        $cropProduction = $this->cropProductionRepository->create($input);

        Flash::success('Crop Production saved successfully.');

        return redirect(route('cropProductions.index'));
    }

    /**
     * Display the specified cropProduction.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cropProduction = $this->cropProductionRepository->findWithoutFail($id);

        if (empty($cropProduction)) {
            Flash::error('Crop Production not found');

            return redirect(route('cropProductions.index'));
        }

        return response()->json($cropProduction);
    }

    /**
     * Show the form for editing the specified cropProduction.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cropProduction = $this->cropProductionRepository->findWithoutFail($id);

        if (empty($cropProduction)) {
            Flash::error('Crop Production not found');

            return redirect(route('cropProductions.index'));
        }

        return view('crop_productions.edit')->with('cropProduction', $cropProduction);
    }

    /**
     * Update the specified cropProduction in storage.
     *
     * @param  int              $id
     * @param UpdatecropProductionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecropProductionRequest $request)
    {
        $cropProduction = $this->cropProductionRepository->findWithoutFail($id);

        if (empty($cropProduction)) {
            Flash::error('Crop Production not found');

            return redirect(route('cropProductions.index'));
        }

        $cropProduction = $this->cropProductionRepository->update($request->all(), $id);

        Flash::success('Crop Production updated successfully.');

        return redirect(route('cropProductions.index'));
    }

    /**
     * Remove the specified cropProduction from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cropProduction = $this->cropProductionRepository->findWithoutFail($id);

        if (empty($cropProduction)) {
            Flash::error('Crop Production not found');

            return redirect(route('cropProductions.index'));
        }

        $this->cropProductionRepository->delete($id);

        Flash::success('Crop Production deleted successfully.');

        return redirect(route('cropProductions.index'));
    }
}
