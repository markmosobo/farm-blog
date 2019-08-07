<?php

namespace App\Http\Controllers;

use App\DataTables\cropLabourcostsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatecropLabourcostsRequest;
use App\Http\Requests\UpdatecropLabourcostsRequest;
use App\Models\Croplabour;
use App\Repositories\cropLabourcostsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class cropLabourcostsController extends AppBaseController
{
    /** @var  cropLabourcostsRepository */
    private $cropLabourcostsRepository;

    public function __construct(cropLabourcostsRepository $cropLabourcostsRepo)
    {
        $this->cropLabourcostsRepository = $cropLabourcostsRepo;
    }

    /**
     * Display a listing of the cropLabourcosts.
     *
     * @param cropLabourcostsDataTable $cropLabourcostsDataTable
     * @return Response
     */
    public function index(cropLabourcostsDataTable $cropLabourcostsDataTable)
    {
        return $cropLabourcostsDataTable->render('crop_labourcosts.index',['labourers'=>Croplabour::all()]);
    }

    /**
     * Show the form for creating a new cropLabourcosts.
     *
     * @return Response
     */
    public function create()
    {
        return view('crop_labourcosts.create');
    }

    /**
     * Store a newly created cropLabourcosts in storage.
     *
     * @param CreatecropLabourcostsRequest $request
     *
     * @return Response
     */
    public function store(CreatecropLabourcostsRequest $request)
    {
        $input = $request->all();

        $cropLabourcosts = $this->cropLabourcostsRepository->create($input);

        Flash::success('Crop Labourcosts saved successfully.');

        return redirect(route('cropLabourcosts.index'));
    }

    /**
     * Display the specified cropLabourcosts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cropLabourcosts = $this->cropLabourcostsRepository->findWithoutFail($id);

        if (empty($cropLabourcosts)) {
            Flash::error('Crop Labourcosts not found');

            return redirect(route('cropLabourcosts.index'));
        }

        return response()->json($cropLabourcosts);
    }

    /**
     * Show the form for editing the specified cropLabourcosts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cropLabourcosts = $this->cropLabourcostsRepository->findWithoutFail($id);

        if (empty($cropLabourcosts)) {
            Flash::error('Crop Labourcosts not found');

            return redirect(route('cropLabourcosts.index'));
        }

        return view('crop_labourcosts.edit')->with('cropLabourcosts', $cropLabourcosts);
    }

    /**
     * Update the specified cropLabourcosts in storage.
     *
     * @param  int              $id
     * @param UpdatecropLabourcostsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecropLabourcostsRequest $request)
    {
        $cropLabourcosts = $this->cropLabourcostsRepository->findWithoutFail($id);

        if (empty($cropLabourcosts)) {
            Flash::error('Crop Labourcosts not found');

            return redirect(route('cropLabourcosts.index'));
        }

        $cropLabourcosts = $this->cropLabourcostsRepository->update($request->all(), $id);

        Flash::success('Crop Labourcosts updated successfully.');

        return redirect(route('cropLabourcosts.index'));
    }

    /**
     * Remove the specified cropLabourcosts from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cropLabourcosts = $this->cropLabourcostsRepository->findWithoutFail($id);

        if (empty($cropLabourcosts)) {
            Flash::error('Crop Labourcosts not found');

            return redirect(route('cropLabourcosts.index'));
        }

        $this->cropLabourcostsRepository->delete($id);

        Flash::success('Crop Labourcosts deleted successfully.');

        return redirect(route('cropLabourcosts.index'));
    }
}
