@extends('layouts.headAndFoot')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Votre panier</h1>
    </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col"> </th>
                        <th scope="col">Produit</th>
                        <th scope="col">Disponnibilité</th>
                        <th scope="col" class="text-center">Quantité</th>
                        <th scope="col" class="text-right">Prix</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                        <td>TITRE PRODUIT</td>
                        <td>In stock</td>
                        <td><input class="form-control" type="text" value="1" /></td>
                        <td class="text-right">124,90 €</td>
                        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                    </tr>
                    <tr>
                        <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                        <td>TITRE PRODUIT</td>
                        <td>In stock</td>
                        <td><input class="form-control" type="text" value="1" /></td>
                        <td class="text-right">33,90 €</td>
                        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                    </tr>
                    <tr>
                        <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                        <td>TITRE PRODUIT</td>
                        <td>En stock</td>
                        <td><input class="form-control" type="text" value="1" /></td>
                        <td class="text-right">70,00 €</td>
                        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Livraison</td>
                        <td class="text-right">Gratuite</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>Total</strong></td>
                        <td class="text-right"><strong>346,90 €</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block">Continuer vos achats</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Confirmer la commande</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection