namespace ChessAPI.Model
{
    public class Dummy : Piece
    {
        public Dummy(ColorEnum color) : base(color)
        {
        }

        public override int GetScore()
        {
            return Config.DummyPieceValue;
        }
    }
}
