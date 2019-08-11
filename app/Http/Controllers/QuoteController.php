<?php

namespace App\Http\Controllers;

use App\DataTables\QuoteDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use App\Repositories\QuoteRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class QuoteController extends AppBaseController
{
    /** @var  QuoteRepository */
    private $quoteRepository;

    public function __construct(QuoteRepository $quoteRepo)
    {
        $this->quoteRepository = $quoteRepo;
    }

    /**
     * Display a listing of the Quote.
     *
     * @param QuoteDataTable $quoteDataTable
     * @return Response
     */
    public function index(QuoteDataTable $quoteDataTable)
    {
        return $quoteDataTable->render('quotes.index');
    }

    /**
     * Show the form for creating a new Quote.
     *
     * @return Response
     */
    public function create()
    {
        return view('quotes.create');
    }

    /**
     * Store a newly created Quote in storage.
     *
     * @param CreateQuoteRequest $request
     *
     * @return Response
     */
    public function store(CreateQuoteRequest $request)
    {
        $input = $request->all();

        $quote = $this->quoteRepository->create($input);

        Flash::success('Quote saved successfully.');

        return redirect(route('quotes.index'));
    }

    /**
     * Display the specified Quote.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $quote = $this->quoteRepository->findWithoutFail($id);

        if (empty($quote)) {
            Flash::error('Quote not found');

            return redirect(route('quotes.index'));
        }

        return view('quotes.show')->with('quote', $quote);
    }

    /**
     * Show the form for editing the specified Quote.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $quote = $this->quoteRepository->findWithoutFail($id);

        if (empty($quote)) {
            Flash::error('Quote not found');

            return redirect(route('quotes.index'));
        }

        return view('quotes.edit')->with('quote', $quote);
    }

    /**
     * Update the specified Quote in storage.
     *
     * @param  int              $id
     * @param UpdateQuoteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQuoteRequest $request)
    {
        $quote = $this->quoteRepository->findWithoutFail($id);

        if (empty($quote)) {
            Flash::error('Quote not found');

            return redirect(route('quotes.index'));
        }

        $quote = $this->quoteRepository->update($request->all(), $id);

        Flash::success('Quote updated successfully.');

        return redirect(route('quotes.index'));
    }

    /**
     * Remove the specified Quote from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $quote = $this->quoteRepository->findWithoutFail($id);

        if (empty($quote)) {
            Flash::error('Quote not found');

            return redirect(route('quotes.index'));
        }

        $this->quoteRepository->delete($id);

        Flash::success('Quote deleted successfully.');

        return redirect(route('quotes.index'));
    }
}
