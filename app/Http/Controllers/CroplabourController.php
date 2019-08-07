<?php

namespace App\Http\Controllers;

use App\DataTables\CroplabourDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCroplabourRequest;
use App\Http\Requests\UpdateCroplabourRequest;
use App\Repositories\CroplabourRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CroplabourController extends AppBaseController
{
    /** @var  CroplabourRepository */
    private $croplabourRepository;

    public function __construct(CroplabourRepository $croplabourRepo)
    {
        $this->croplabourRepository = $croplabourRepo;
    }

    /**
     * Display a listing of the Croplabour.
     *
     * @param CroplabourDataTable $croplabourDataTable
     * @return Response
     */
    public function index(CroplabourDataTable $croplabourDataTable)
    {
        return $croplabourDataTable->render('croplabours.index');
    }

    /**
     * Show the form for creating a new Croplabour.
     *
     * @return Response
     */
    public function create()
    {
        return view('croplabours.create');
    }

    /**
     * Store a newly created Croplabour in storage.
     *
     * @param CreateCroplabourRequest $request
     *
     * @return Response
     */
    public function store(CreateCroplabourRequest $request)
    {
        $input = $request->all();

        $croplabour = $this->croplabourRepository->create($input);

        Flash::success('Croplabour saved successfully.');

        return redirect(route('croplabours.index'));
    }

    /**
     * Display the specified Croplabour.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $croplabour = $this->croplabourRepository->findWithoutFail($id);

        if (empty($croplabour)) {
            Flash::error('Croplabour not found');

            return redirect(route('croplabours.index'));
        }

        return view('croplabours.show')->with('croplabour', $croplabour);
    }

    /**
     * Show the form for editing the specified Croplabour.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $croplabour = $this->croplabourRepository->findWithoutFail($id);

        if (empty($croplabour)) {
            Flash::error('Croplabour not found');

            return redirect(route('croplabours.index'));
        }

        return view('croplabours.edit')->with('croplabour', $croplabour);
    }

    /**
     * Update the specified Croplabour in storage.
     *
     * @param  int              $id
     * @param UpdateCroplabourRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCroplabourRequest $request)
    {
        $croplabour = $this->croplabourRepository->findWithoutFail($id);

        if (empty($croplabour)) {
            Flash::error('Croplabour not found');

            return redirect(route('croplabours.index'));
        }

        $croplabour = $this->croplabourRepository->update($request->all(), $id);

        Flash::success('Croplabour updated successfully.');

        return redirect(route('croplabours.index'));
    }

    /**
     * Remove the specified Croplabour from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $croplabour = $this->croplabourRepository->findWithoutFail($id);

        if (empty($croplabour)) {
            Flash::error('Croplabour not found');

            return redirect(route('croplabours.index'));
        }

        $this->croplabourRepository->delete($id);

        Flash::success('Croplabour deleted successfully.');

        return redirect(route('croplabours.index'));
    }
}
