@extends('layouts.master')
@section('content')


    
    
<section>

    <div class="flex card-container pl-16">
        <h1 class="font-semibold text-4xl my-7 mr-6">Overview</h1>
    </div>
    <div class="flex card-container justify-evenly">
    
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-1/2 h-1/2">
        
        <a href="#" class="flex items-center mb-4">
            <img src="images/greencheck.svg" width="48" class="mr-3">

            <h5 class="mb-2 text-1xl font-normal tracking-tight text-gray-900 dark:text-white">Tasks Done</h5>
        </a>
        <div class="flex flex-col">
            <span class="mb-3 font-bold text-gray-700 dark:text-gray-400 text-3xl">31</span>
        </div>
        <hr class="mb-5">
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-dark bg-white-700 rounded-lg hover:bg-gray-300 focus:ring-4 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            See all tasks
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-1/2 h-1/2">

        <a href="#" class="flex items-center mb-4">
            <img src="images/blue.svg" width="48" class="mr-3">
            <h5 class="mb-2 text-1xl font-normal tracking-tight text-gray-900 dark:text-white">Pending Tasks</h5>
        </a>
        <div class="flex flex-col">
        <span class="mb-3 font-bold text-gray-700 dark:text-gray-400 text-3xl">12</span>
        </div>
        <hr class="mb-5">
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-dark bg-white-700 rounded-lg hover:bg-gray-300 focus:ring-4 focus:outline-none  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            See all tasks
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>

    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-1/2 h-1/2">

        <a href="#" class="flex items-center mb-4">
            <img src="images/purple.svg" width="48" class="mr-3">
            <h5 class="mb-2 text-1xl font-normal tracking-tight text-gray-900 dark:text-white">Open Tasks</h5>
        </a>
        <div class="flex flex-col">
            <span class="mb-3 font-bold text-gray-700 dark:text-gray-400 text-3xl">5</span>
        </div>
        <hr class="mb-5">
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-dark bg-white-700 rounded-lg hover:bg-gray-300 focus:ring-4 focus:outline-none  dark:bg-blue-600 dark:focus:ring-blue-800">
            See all tasks
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
</div>

    <hr class="my-5">
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    All
                </th>
                <th scope="col" class="px-6 py-3">
                    Confirmed
                </th>
                <th scope="col" class="px-6 py-3">
                    Pending
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Microsoft Surface Pro
                </th>
                <td class="px-6 py-4">
                    White
                </td>
                <td class="px-6 py-4">
                    Laptop PC
                </td>
                <td class="px-6 py-4">
                    $1999
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
            </tr>
        </tbody>
    </table>
</div>


</section>





@endsection