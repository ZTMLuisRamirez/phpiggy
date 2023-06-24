<?php include $this->resolve("partials/_header.php"); ?>

<!-- Start Main Content Area -->
<section class="container mx-auto mt-12 p-4 bg-white shadow-md border border-gray-200 rounded">
  <div class="flex items-center justify-between border-b border-gray-200 pb-4">
    <h4 class="font-medium">Transaction List</h4>
    <div class="flex space-x-4">
      <a href="/transaction" class="flex items-center p-2 bg-sky-50 text-xs text-sky-900 hover:bg-sky-500 hover:text-white transition rounded">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>

        New Transaction
      </a>
    </div>
  </div>
  <!-- Search Form -->
  <form method="GET" class="mt-4 w-full">
    <div class="flex">
      <input name="s" type="text" class="w-full rounded-l-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter search term" />
      <button type="submit" class="rounded-r-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Search
      </button>
    </div>
  </form>
  <!-- Transaction List -->
  <table class="table-auto min-w-full divide-y divide-gray-300 mt-6">
    <thead class="bg-gray-50">
      <tr>
        <th class="p-4 text-left text-sm font-semibold text-gray-900">
          Description
        </th>
        <th class="p-4 text-left text-sm font-semibold text-gray-900">
          Amount
        </th>
        <th class="p-4 text-left text-sm font-semibold text-gray-900">
          Receipt(s)
        </th>
        <th class="p-4 text-left text-sm font-semibold text-gray-900">
          Date
        </th>
        <th>Actions</th>
      </tr>
    </thead>
    <!-- Transaction Table Body -->
    <tbody class="divide-y divide-gray-200 bg-white">
      <tr>
        <!-- Description -->
        <td class="p-4 text-sm text-gray-600">Lorem Ipsum</td>
        <!-- Amount -->
        <td class="p-4 text-sm text-gray-600">Lorem Ipsum</td>
        <!-- Receipt List -->
        <td class="p-4 text-sm text-gray-600">
          <div class="inline-block relative cursor-pointer">
            <a href="/transaction/TRANSACTIONID/receipt/RECEIPTID">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="rgb(109 40 217)" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
              </svg>
            </a>
            <form action="/transaction/TRANSACTIONID/receipt/RECEIPTID" method="POST">
              <input type="hidden" name="_METHOD" value="DELETE" />
              <button type="submit" class="absolute -top-1 -right-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="rgb(239 68 68)" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </button>
            </form>
          </div>
        </td>
        <!-- Date -->
        <td class="p-4 text-sm text-gray-600">Lorem Ipsum</td>
        <!-- Actions -->
        <td class="p-4 text-sm text-gray-600 flex justify-center space-x-2">
          <a href="#" class="p-2 bg-amber-50 text-xs text-amber-900 hover:bg-amber-500 hover:text-white transition rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
            </svg>
          </a>
          <a href="#" class="p-2 bg-emerald-50 text-xs text-emerald-900 hover:bg-emerald-500 hover:text-white transition rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
          </a>
          <form method="POST">
            <button type="submit" class="p-2 bg-red-50 text-xs text-red-900 hover:bg-red-500 hover:text-white transition rounded">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
              </svg>
            </button>
          </form>
        </td>
      </tr>
      <tr>
        <!-- Description -->
        <td class="p-4 text-sm text-gray-600">Lorem Ipsum</td>
        <!-- Amount -->
        <td class="p-4 text-sm text-gray-600">Lorem Ipsum</td>
        <!-- Receipt List -->
        <td class="p-4 text-sm text-gray-600">
          <div class="inline-block relative cursor-pointer">
            <a href="/transaction/TRANSACTIONID/receipt/RECEIPTID">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="rgb(109 40 217)" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
              </svg>
            </a>
            <form action="/transaction/TRANSACTIONID/receipt/RECEIPTID" method="POST">
              <input type="hidden" name="_METHOD" value="DELETE" />
              <button type="submit" class="absolute -top-1 -right-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="rgb(239 68 68)" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </button>
            </form>
          </div>
        </td>
        <!-- Date -->
        <td class="p-4 text-sm text-gray-600">Lorem Ipsum</td>
        <!-- Actions -->
        <td class="p-4 text-sm text-gray-600 flex justify-center space-x-2">
          <a href="#" class="p-2 bg-amber-50 text-xs text-amber-900 hover:bg-amber-500 hover:text-white transition rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
            </svg>
          </a>
          <a href="#" class="p-2 bg-emerald-50 text-xs text-emerald-900 hover:bg-emerald-500 hover:text-white transition rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
          </a>
          <form method="POST">
            <button type="submit" class="p-2 bg-red-50 text-xs text-red-900 hover:bg-red-500 hover:text-white transition rounded">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
              </svg>
            </button>
          </form>
        </td>
      </tr>
      <tr>
        <!-- Description -->
        <td class="p-4 text-sm text-gray-600">Lorem Ipsum</td>
        <!-- Amount -->
        <td class="p-4 text-sm text-gray-600">Lorem Ipsum</td>
        <!-- Receipt List -->
        <td class="p-4 text-sm text-gray-600">
          <div class="inline-block relative cursor-pointer">
            <a href="/transaction/TRANSACTIONID/receipt/RECEIPTID">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="rgb(109 40 217)" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
              </svg>
            </a>
            <form action="/transaction/TRANSACTIONID/receipt/RECEIPTID" method="POST">
              <input type="hidden" name="_METHOD" value="DELETE" />
              <button type="submit" class="absolute -top-1 -right-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="rgb(239 68 68)" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </button>
            </form>
          </div>
        </td>
        <!-- Date -->
        <td class="p-4 text-sm text-gray-600">Lorem Ipsum</td>
        <!-- Actions -->
        <td class="p-4 text-sm text-gray-600 flex justify-center space-x-2">
          <a href="#" class="p-2 bg-amber-50 text-xs text-amber-900 hover:bg-amber-500 hover:text-white transition rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
            </svg>
          </a>
          <a href="#" class="p-2 bg-emerald-50 text-xs text-emerald-900 hover:bg-emerald-500 hover:text-white transition rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
          </a>
          <form method="POST">
            <button type="submit" class="p-2 bg-red-50 text-xs text-red-900 hover:bg-red-500 hover:text-white transition rounded">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
              </svg>
            </button>
          </form>
        </td>
      </tr>
      <tr>
        <!-- Description -->
        <td class="p-4 text-sm text-gray-600">Lorem Ipsum</td>
        <!-- Amount -->
        <td class="p-4 text-sm text-gray-600">Lorem Ipsum</td>
        <!-- Receipt List -->
        <td class="p-4 text-sm text-gray-600">
          <div class="inline-block relative cursor-pointer">
            <a href="/transaction/TRANSACTIONID/receipt/RECEIPTID">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="rgb(109 40 217)" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
              </svg>
            </a>
            <form action="/transaction/TRANSACTIONID/receipt/RECEIPTID" method="POST">
              <input type="hidden" name="_METHOD" value="DELETE" />
              <button type="submit" class="absolute -top-1 -right-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="rgb(239 68 68)" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </button>
            </form>
          </div>
        </td>
        <!-- Date -->
        <td class="p-4 text-sm text-gray-600">Lorem Ipsum</td>
        <!-- Actions -->
        <td class="p-4 text-sm text-gray-600 flex justify-center space-x-2">
          <a href="#" class="p-2 bg-amber-50 text-xs text-amber-900 hover:bg-amber-500 hover:text-white transition rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
            </svg>
          </a>
          <a href="#" class="p-2 bg-emerald-50 text-xs text-emerald-900 hover:bg-emerald-500 hover:text-white transition rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
          </a>
          <form method="POST">
            <button type="submit" class="p-2 bg-red-50 text-xs text-red-900 hover:bg-red-500 hover:text-white transition rounded">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
              </svg>
            </button>
          </form>
        </td>
      </tr>
    </tbody>
  </table>
  <nav class="flex items-center justify-between border-t border-gray-200 px-4 sm:px-0 mt-6">
    <!-- Previous Page Link -->
    <div class="-mt-px flex w-0 flex-1">
      <a href="/" class="inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
        <svg class="mr-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z" clip-rule="evenodd" />
        </svg>
        Previous
      </a>
    </div>
    <!-- Pages Link -->
    <div class="hidden md:-mt-px md:flex">
      <a href="/" class="inline-flex items-center border-t-2 px-4 pt-4 text-sm font-medium">
        1
      </a>
      <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
    </div>
    <!-- Next Page Link -->
    <div class="-mt-px flex w-0 flex-1 justify-end">
      <a href="/" class="inline-flex items-center border-t-2 border-transparent pl-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
        Next
        <svg class="ml-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
        </svg>
      </a>
    </div>
  </nav>
</section>
<!-- End Main Content Area -->

<?php include $this->resolve("partials/_footer.php"); ?>