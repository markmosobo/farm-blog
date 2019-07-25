<?php

namespace App\Http\Controllers;

use App\DataTables\NoticeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateNoticeRequest;
use App\Http\Requests\UpdateNoticeRequest;
use App\Repositories\NoticeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class NoticeController extends AppBaseController
{
    /** @var  NoticeRepository */
    private $noticeRepository;

    public function __construct(NoticeRepository $noticeRepo)
    {
        $this->noticeRepository = $noticeRepo;
    }

    /**
     * Display a listing of the Notice.
     *
     * @param NoticeDataTable $noticeDataTable
     * @return Response
     */
    public function index(NoticeDataTable $noticeDataTable)
    {
        return $noticeDataTable->render('notices.index');
    }

    /**
     * Show the form for creating a new Notice.
     *
     * @return Response
     */
    public function create()
    {
        return view('notices.create');
    }

    /**
     * Store a newly created Notice in storage.
     *
     * @param CreateNoticeRequest $request
     *
     * @return Response
     */
    public function store(CreateNoticeRequest $request)
    {
        $input = $request->all();

        $notice = $this->noticeRepository->create($input);

        Flash::success('Notice saved successfully.');

        return redirect(route('notices.index'));
    }

    /**
     * Display the specified Notice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $notice = $this->noticeRepository->findWithoutFail($id);

        if (empty($notice)) {
            Flash::error('Notice not found');

            return redirect(route('notices.index'));
        }

        return view('notices.show')->with('notice', $notice);
    }

    /**
     * Show the form for editing the specified Notice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $notice = $this->noticeRepository->findWithoutFail($id);

        if (empty($notice)) {
            Flash::error('Notice not found');

            return redirect(route('notices.index'));
        }

        return view('notices.edit')->with('notice', $notice);
    }

    /**
     * Update the specified Notice in storage.
     *
     * @param  int              $id
     * @param UpdateNoticeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNoticeRequest $request)
    {
        $notice = $this->noticeRepository->findWithoutFail($id);

        if (empty($notice)) {
            Flash::error('Notice not found');

            return redirect(route('notices.index'));
        }

        $notice = $this->noticeRepository->update($request->all(), $id);

        Flash::success('Notice updated successfully.');

        return redirect(route('notices.index'));
    }

    /**
     * Remove the specified Notice from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $notice = $this->noticeRepository->findWithoutFail($id);

        if (empty($notice)) {
            Flash::error('Notice not found');

            return redirect(route('notices.index'));
        }

        $this->noticeRepository->delete($id);

        Flash::success('Notice deleted successfully.');

        return redirect(route('notices.index'));
    }
}
